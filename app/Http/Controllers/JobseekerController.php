<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobseeker;
use App\Models\Apply;
use App\Models\Job;
use App\Models\User;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\MastersDepartment;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use ZipArchive;
class JobseekerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        if(Auth()->User() && Auth()->user()->status=="admin"){
            return redirect()->to('/jobs');
        }
        if(Auth()->User() && Auth()->user()->status=="user"){
            return redirect()->to('/home');
        }
        $jobs = Job::where('last_date','>=',date('Y-m-d'))->get()->sortBy('company');
        return view('list',compact('jobs'));
    }

    public function details($id)
    {
        $job = Job::find($id);
        
        return view('details',compact('job'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth()->check() && Auth()->user()->status=="user"){
            return redirect()->to('/alljobs');
        }
        if(Auth()->check() && Auth()->user()->status=="admin"){
            return redirect()->to('/jobs');
        }
        // $departments = Department::all();
        $faculties = Faculty::all()->pluck('faculty_name', 'id');
        return view('jobseeker.create', compact('faculties'));
    }
    public function getDepartment($id){
        $departments = DB::table("departments")->where("faculty_id",$id)->pluck("department_name","id");
        return json_encode($departments);
    }
    
    public function getMastersDepartment($id){
        $masters_departments = DB::table("masters_departments")->where("faculty_id",$id)->pluck("department_name","id");
        return json_encode($masters_departments);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     
    //  public function undp(){
    //     $client = new Client([
    //         'verify' => false
    //     ]);
    
    //     $data = array(
    //         'token' => '5uz$)[1j=3chbr9pz,32f7_1',
    //         'email' => 'youth@gmail.com'
    //      );
    //      $response = $client->post('https://gateway.futurenation.gov.bd/api/public/youth/check-existence', [
    //         'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
    //         'body'    => json_encode($data)
    //     ]); 
    //     print_r(json_decode($response->getBody(), true));
    
    
    
        
    //     return "a";
    //   }
      
        public function store(Request $request)
    {

        // dd( env('SSO'));
        $request->validate([
            'name'     =>  'required',
            'cell'  =>  'required',
            'email'   =>  'required',
            'password' => [
                'required',
                'string',
                'min:6',             // must be at least 10 characters in length
                'confirmed'          // must contain a special character
            ],
            'resume'    =>  'required|mimetypes:application/pdf|max:10000',
            'address'    =>  'required',
            'industry'    =>  'required',
            'jobseeker_type'  =>  'required',
            'bachelor_faculty_id' => 'required',
            'bachelor_department_id' => 'required',
           //'trix'    =>  'required',
        ]);

        $request->validate([
            'industry'    =>  'required',
        ]);
        if($request->bachelor_status!='yes'){
            $request->validate([
                'bachelor_year'    =>  'required',
                'bachelor_result'    =>  'required',
            ]);
        }


        // if( $request->masters_status!='yes'){
        //     $request->validate([
        //         'masters_result'    =>  'required',
        //         'masters_year'    =>  'required',
        //     ]);
        // }
     
       // dd($request);

        // $client = new Client([
        //     'verify' => false
        // ]);
      
        // $response = $client->request('POST', env('SSO').'/ssologin/register.php', ['form_params' => [
        //     'email' => $request->email,
        //     'status' => 'user',
        //     'password' => $request->password,
        //     'first_name' => $request->name,
        //     'last_name' => $request->name,
        //     'address' => $request->address,
        //     'mobile' => $request->cell,
        //     'city' => $request->city,
        //     'key' => "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJUSEVfSVNTVUVSIiwiYXVkIjoiVEhFX0FVRElFTkNFIiwiaWF0IjoxNjIxNDE0MTczLCJuYmYiOjE2MjE0MTQxNzMsImV4cCI6MTYyMTQxNDc3MywiZGF0YSI6eyJqb2JzZWVrZXJfaWQiOiIxMjAxMDUiLCJqb2JzZWVrZXJfc3RhdHVzIjoiWWVzIiwiam9ic2Vla2VyX2VtYWlsX2FkZHJlc3MiOiJ0b3B1YmhhaUBnbWFpbC5jb20iLCJkYXRhIjoieHl6In19.1CFRT12afB4FZwTygv716qbn_wocMRE3o7Q7NPBK2qQ",
        // ],
        // 'http_errors' => false
        // ]);

        // if($response->getStatusCode()==200){
            //register
            $user = new User;
            $user->email = $request->email;
            $user->name = $request->name;
            $user->status = 'user';
            $user->password = Hash::make($request->password);
            $user->save();
            $resume = $request->file('resume');
            $new_resume = rand() . '.' . $resume->getClientOriginalExtension();
            $resume->move(public_path('resume'), $new_resume);

            $form_data = array(
                'name'    =>   $request->name,
                'address'    =>   $request->address,
                'cell'    =>   $request->cell,
                'email'   =>   $request->email,
                'experience'=>   $request->experience,
                'payment_status'=>   -1,
                'resume'  =>   $new_resume,
                'trix'  =>   $request->trix,
                'video'  =>   $request->video,
                'jobseeker_type'  =>   $request->jobseeker_type,

                'bachelor_subject'  =>   $request->bachelor_subject,
                'bachelor_status'  =>   $request->bachelor_status=='yes'? 'Ongoing':'',
                'bachelor_year'  =>   $request->bachelor_year,
                'bachelor_result'  => $request->bachelor_result,
                'bachelor_institute'  =>   $request->bachelor_institute,
                
                'masters_subject'  =>   $request->masters_subject,
                'masters_status'  =>   $request->masters_status=='yes'? 'Ongoing':'',
                'masters_year'  =>  $request->masters_year,
                'masters_result'  =>  $request->masters_result,
                'masters_institute'  =>   $request->masters_institute,

                'masters_faculty_id' => $request->masters_faculty_id,
                'masters_department_id' => $request->masters_department_id,
                'bachelor_faculty_id' => $request->bachelor_faculty_id,
                'bachelor_department_id' => $request->bachelor_department_id,

                'industry'  =>   implode(',', (array) $request->get('industry')),
                
                'skill' => implode(',', (array) $request->get('skill'))
                
            );
            Jobseeker::create($form_data);
            
            return redirect('/jobseeker/create')->with('success', 'Registration Successfull.Please login to apply.');
        // }
        // else if ($response->getStatusCode()==400){

        //     if(User::where('email',$request->email)->exists()){
        //         return redirect('/jobseeker/create')->with('success', 'Already Registered');
        //     }
               
        //     $user = new User;
        //     $user->email = $request->email;
        //     $user->status = 'user';
        //     $user->name = $request->name;
        //     $user->password = Hash::make($request->password);
        //     $user->save();
        //     $resume = $request->file('resume');
        //     $new_resume = rand() . '.' . $resume->getClientOriginalExtension();
        //     $resume->move(public_path('resume'), $new_resume);

        //     $form_data = array(
        //         'name'    =>   $request->name,
        //         'address'    =>   $request->address,
        //         'city'    =>   $request->city,
        //         'cell'    =>   $request->cell,
        //         'email'   =>   $request->email,
        //         'category'=>   "all",
        //         'experience'=>   $request->experience,
        //         'category'=>   "all",
        //         'payment_status'=>   -1,
        //         'work_home'=>   $request->work_home,
        //         'device'=>   $request->device,
        //         'internet'=>   $request->internet,
        //         'resume'  =>   $new_resume,
        //         'trix'  =>   $request->trix,
        //         'university'  =>   $request->university,
        //         'major'  =>   $request->major,
        //         'last'  =>   $request->last,
        //         'video'  =>   $request->video,
        //         'club'  =>   $request->club,
                
        //         'bachelor_subject'  =>   $request->bachelor_subject,
        //         'bachelor_status'  =>   $request->bachelor_status=='yes'? 'Ongoing':'',
        //         'bachelor_year'  =>   $request->bachelor_year,
        //         'bachelor_result'  => $request->bachelor_result,
        //         'bachelor_institute'  =>   $request->bachelor_institute,
                
        //         'masters_subject'  =>   $request->masters_subject,
        //         'masters_status'  =>   $request->masters_status=='yes'? 'Ongoing':'',
        //         'masters_year'  =>  $request->masters_year,
        //         'masters_result'  =>  $request->masters_result,
        //         'masters_institute'  =>   $request->masters_institute,

        //         'certificate'  =>   $request->certificate,
        //         'masters_faculty_id' => $request->masters_faculty_id,
        //         'masters_department_id' => $request->masters_department_id,
        //         'bachelor_faculty_id' => $request->bachelor_faculty_id,
        //         'bachelor_department_id' => $request->bachelor_department_id,

        //         'industry'  =>   implode(',', (array) $request->get('industry')),


                
        //         'skill' => implode(',', (array) $request->get('skill'))
                
        //     );
        //     Jobseeker::create($form_data);

        //     return redirect('/jobseeker/create')->with('success', 'Registration Successfull.We Will notify  you shorty');
        // }

        //dd( $response->getStatusCode().$response->getBody()->getContents());

        // //var_dump($form_data);
        // //var_dump($form_data);
        // $data = Jobseeker::create($form_data);
    }

    public function update(Request $request){
        // dd($request);
        $request->validate([
            'name'     =>  'required',
            'cell'  =>  'required',
            // 'resume'    =>  'required|mimetypes:application/pdf|max:10000',
            'address'    =>  'required',
            'industry'    =>  'required',
        ]);

        $user = User::where('email',Auth()->User()->email)->first();
        $jobseeker = Jobseeker::where('email',$user->email)->first();
  
        $resume = $request->file('resume');
        if($resume){
            $new_resume = rand() . '.' . $resume->getClientOriginalExtension();
            $resume->move(public_path('resume'), $new_resume);
        }
        else {
            $new_resume = $jobseeker->resume;
        }
        $form_data = array(
            'name'    =>   $request->name,
            'address'    =>   $request->address,
            'cell'    =>   $request->cell,
            'experience'=>   $request->experience,
            'payment_status'=>   -1,
            'resume'  =>   $new_resume,
            'video'  =>   $request->video,
            'industry'  =>   implode(',', (array) $request->get('industry')),

            'bachelor_subject'  =>   $request->bachelor_subject,
            'bachelor_status'  =>   $request->bachelor_status=='yes'? 'Ongoing':'',
            'bachelor_year'  =>   $request->bachelor_year,
            'bachelor_result'  => $request->bachelor_result,
            'bachelor_institute'  =>   $request->bachelor_institute,
            
            'masters_subject'  =>   $request->masters_subject,
            'masters_status'  =>   $request->masters_status=='yes'? 'Ongoing':'',
            'masters_year'  =>  $request->masters_year,
            'masters_result'  =>  $request->masters_result,
            'masters_institute'  =>   $request->masters_institute,
            
            'jobseeker_type'  =>   $request->jobseeker_type,
            'bachelor_faculty_id' => $request->bachelor_faculty_id,
            'bachelor_department_id' => $request->bachelor_department_id,
            'masters_faculty_id' => $request->masters_faculty_id,
            'masters_department_id' => $request->masters_department_id,
            
            'skill' => implode(',', (array) $request->get('skill'))  
        );
        $jobseeker->update($form_data);

        $form_data2 = array(
            'name'    =>   $request->name
        );
        $user->update($form_data2);

        return redirect('profile')->with('success', 'Profile update successfull.');
    }

    public function profile(){
        $user = Auth()->user();
        $data = Jobseeker::where('email',$user->email)->first();
        $faculties = Faculty::all();
        $departments = Department::all();
        $masters_departments = MastersDepartment::all();
        $industries = array(
            "Accounting/Finance/Banking", 
            "Administration/HR/Legal", 
            "Advertising/Marketing/PR",
            "Arts & Design",
            "Automotive",
            "Aviation/Airlines",
            "Call Centre/BPO",
            "Construction/Architecture",
            "Consulting Services",
            "Courier/Distribution/Logistics",
            "CustomerSupport/Telemarketing",
            "Digital Marketing",
            "Education/Training",
            "Engineering/Manufacturing",
            "Entertainment/Media",
            "Environmental",
            "Export/Import",
            "Fashion/Garments",
            "Food Industry",
            "Government Services",
            "HealthCare/Pharma",
            "Hospitality/Travel/Tourism",
            "Insurance",
            "Internet/E-Commerc",
            "IT/Hardware",
            "IT/Software",
            "Legal/Company Secretarial",
            "Maintenance/Repair",
            "Media/Publishing",
            "oil,gas &amp; power",
            "Oil/Gas/Utilities",
            "Production/Operations",
            "Others",
            "Purchase/ Supply Chain",
            "Recruitment/HR",
            "Retail/Wholesale",
            "Sales/Business Development",
            "Science/Research/Development",
            "Software Development",
            "Sports and Recreation",
            "Supply Chain/Logistics",
            "Telecom/ ISP",
            "Transportation/Warehousing",
            "Travel/ Airlines",
          
        );
        $selected = explode(",",$data->industry);

        return view('jobseeker.profile',compact('data','user','industries','selected','faculties','departments', 'masters_departments'));     
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approvepayment(Request $request)
    {
        if(Auth()->check() && Auth()->user()->status!="admin"){
            return redirect()->to('/alljobs');
        }

        $data = Jobseeker::find($request->id);
        $data->payment_status = $request->payment_status;
        $data->save();
        return redirect()->back()->with('status', 'Payment Status Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function approve($id)
    {
        if(Auth()->check() && Auth()->user()->status!="admin"){
            return redirect()->to('/alljobs');
        }
        $data = Jobseeker::find($id);
        return view('approve',compact('data'));
    }

    public function payOnline(Request $request)
    { 
        $client = new Client([
            'verify' => false
        ]);
 
        $response = $client->request('POST', 'https://api.1card.com.bd/odootest/pay', ['form_params' => [
            'user_id' => 55,
            'amount' => 5000,
            'currency_code' => "BDT",
            'cus_name' => "kamrul",
            'cus_email' => "kamrul@daffodil-bd.com",
            'cus_address' => "Dhaka",
            'cus_city' => "dhaka",
            'cus_state' => "dhaka",
            'cus_postcode' => "1205",
            'cus_country' => "Bangladesh",
            'cus_phone' => "01704960656",
            'response_type' => "json",
            'service_type' => "",
            'success' => "https://easyapply.skill.jobs/login",
            'redirect' => "https://easyapply.skill.jobs",
            'reff_id' => "4545745",
        ],
        'http_errors' => false
        ]);

        $data = json_decode($response->getBody()->getContents());

        if(isset($data->url)){
            dd($data->url);
        }
        else {
            dd("error");
        }
    }

    public function payCheck(Request $request)
    {
        $client = new Client([
            'verify' => false
        ]);
 
        $response = $client->request('POST', 'https://api.1card.com.bd/odootest/validationserverapi', ['form_params' => [
            'reff_id' => "4545745",

            'token' => "ceb263b97edc55698ab6fcf755ebcc1d",
        ],
        'http_errors' => false
        ]);

        $data = json_decode($response->getBody()->getContents());

        dd($data->message);

        // if(isset($data->message) && $data->message=="success"){
        //     dd('success');
        // }
        // else {
        //     dd("fail");
        // }
    }
    
    public function jobseeker_search(Request $request)
    {
        if(Auth()->user()->status!="admin"){
            return redirect()->to('/home');
            
        }
        
        $data = DB::table('jobseekers');
        if( $request->name){
            $data = $data->where('name', 'LIKE', "%" . $request->name . "%");
        }
        if( $request->bachelor_subject){
            $data = $data->where('bachelor_subject', '=', $request->bachelor_subject);
        }
        
        $q = $request->q;
       
        $jobseekers = Jobseeker::paginate(50);
        #$jobseekers = Jobseeker::get();

        if($q != ""){
        $jobseekers = Jobseeker::where ( 'skill', 'LIKE', '%' . $q . '%' )
        //->whereYear('created_at', 2021)
        ->orWhere ( 'bachelor_institute', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'masters_institute', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'bachelor_subject', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'masters_subject', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'industry', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'description', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'trix', 'LIKE', '%' . $q . '%' )
        ->orWhere ( 'email', 'LIKE', '%' . $q . '%' )
        ->paginate (50)->setPath ('');
        }
       
        $count2 = Jobseeker::get()->count();

        return view('jobseeker.jobseeker_info',compact('data', 'jobseekers','count2'));
    }

    public function downloadResumes()
{
    // Get all the resumes from the jobseekers table
    $resumes = DB::table('jobseekers')->pluck('resume')->toArray();

    // Create a new ZIP archive
    $zip = new ZipArchive;
    $zipFileName = 'jobseeker_resumes.zip';

    if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) !== TRUE) {
        // Handle the case where the ZIP archive could not be created
        return back()->withErrors(['error' => 'Failed to create ZIP archive.']);
    }

    // Add each resume to the ZIP archive
    foreach ($resumes as $resume) {
        $resumePath = public_path("resume/$resume");
        if (!file_exists($resumePath)) {
            // Handle the case where the resume file is not found
            return back()->withErrors(['error' => "Resume file not found: $resume"]);
        }
        $zip->addFile($resumePath, basename($resume));
    }

    // Close the ZIP archive
    $zip->close();

    // Send the ZIP file to the user
    return response()->download(public_path($zipFileName), 'jobseeker_resumes.zip')->deleteFileAfterSend(true);
}

// for jobwise download
public function downloadJobResumes($job_id)
{
    // Get the job title for the selected job
    $job_title = Job::findOrFail($job_id)->title;

    // Get all the resumes for the selected job from the applies table
    $resumes = DB::table('applies')
                ->where('job_id', $job_id)
                ->pluck('resume')
                ->toArray();

    // Create a new ZIP archive
    $zip = new ZipArchive;
    $zipFileName = "{$job_title}_resumes.zip";

    if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) !== TRUE) {
        // Handle the case where the ZIP archive could not be created
        return back()->withErrors(['error' => 'Failed to create ZIP archive.']);
    }

    // Add each resume to the ZIP archive
    foreach ($resumes as $resume) {
        $resumePath = public_path("resume/$resume");
        if (!file_exists($resumePath)) {
            // Handle the case where the resume file is not found
            return back()->withErrors(['error' => "Resume file not found: $resume"]);
        }
        $zip->addFile($resumePath, basename($resume));
    }

    // Close the ZIP archive
    $zip->close();

    // Send the ZIP file to the user
    return response()->download(public_path($zipFileName), $zipFileName)->deleteFileAfterSend(true);
}


}
