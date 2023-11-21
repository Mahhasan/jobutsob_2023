<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Job;
use App\Models\Apply;
use App\Models\Jobseeker;
use App\Models\Company;
use App\Models\User;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['company_jobs','all_jobs']]);
    }
    public function index()
    {
        if(Auth()->user()->status!="admin"){
            return redirect()->to('/home');
        }
        $data = DB::table('jobs');
        $jobs = Job::paginate(10000);
        $index = $jobs->perPage() * ($jobs->currentPage() - 1);
        $count = Job::get()->count();
        return view('jobs',compact('jobs', 'data', 'count', 'index'));
    }
    /**
     * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        $companies = Company::get();
        // dd($companies);
        return view('create',compact('companies'));
    }
    public function create_company()
    {
        return view('create_company');
    }
    public function create_company_post(Request $request)
    {
        $data_insert = User::create([
            'name' => $request->executive_name,
            'email' => $request->email,
            'designation' => $request->designation,
            'cell' => $request->cell,
            'status' => 'company',
            'gender' => 'N/A',
            'password' => Hash::make('jobutsob2023'),
        ]);
        $obj = new Company;
        $obj->name  = $request->name;
        $obj->user_id  = $data_insert->id;
        $obj->slug  = Str::slug($request->name, '-');;
        $imageName = time().'.'.$request->logo->extension();  
        $request->logo->move(public_path('logo'), $imageName);
        $obj->logo  = $imageName;
        $obj->location  = $request->location;
        $data = $obj->save();
        return redirect()->back()->with('success', 'Company Added Succesfully');
    }
    public function company_jobs($name){
         $company = Company::where('slug',$name)->first();
         $jobs = Job::where('last_date','>=',date('Y-m-d'))->where('company',$company->id)->get();
         return view('company_jobs',compact('company','jobs'));
    }
    public function all_jobs(){
        $data = DB::table('jobs');
        $jobs = Job::where('last_date', '>=', date('Y-m-d'))->paginate(20);
        $search_jobs = Job::where('last_date', '>=', date('Y-m-d'))
            ->select('company')
            ->distinct()
            ->get();
        
        return view('list', compact('jobs', 'search_jobs', 'data'));
    }
    
     /**
      * Store a newly created resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $request->validate([
             'title'     =>  'required',
             'company'  =>  'required',
             //'logo'    =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'last_date'   =>  'required',
             'description'   =>  'required',
             'salary'   =>  'required',
             'short_description'   =>  'required',
         ]);
         // $imageName = time().'.'.$request->logo->extension();  
         // $request->logo->move(public_path('logo'), $imageName);
         $job = new Job;
         $job->title = $request->title;
         $job->company = $request->company;
         $job->logo = '-';
         $job->last_date = $request->last_date;
         $job->salary = $request->salary;
         $job->job_link = $request->job_link;
         $job->description = $request->description;
         $job->short_description = $request->short_description;
         $job->save();
         return redirect()->back()->with('success', 'Job Posted Succesfully');
     }
     /**
      * Display the specified resource.
      *
      * @param  \App\Job  $job
      * @return \Illuminate\Http\Response
      */
     public function show(Job $job)
     {
         if(Auth()->user()->status!="user"){
             return redirect()->to('/');
         }
         $user = Auth()->user();
         $isapplied = Apply::where([
             ['job_id',$job->id],
             ['user_id',$user->id],
         ])->exists();
        //  $client = new Client([
        //      'verify' => false
        //  ]);
        //  $data = array(
        //      'token' => '5uz$)[1j=3chbr9pz,32f7_1',
        //      'email' => $user->email
        //   );
        //   $response = $client->post(env('UNDP'), [
        //      'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
        //      'body'    => json_encode($data)
        //  ]); 
        //  $undp = json_decode($response->getBody(), true);
         return view('apply',compact('job','isapplied',));
     }
     /**
      * Show the form for editing the specified resource.
      *
      * @param  \App\Job  $job
      * @return \Illuminate\Http\Response
      */
     public function edit(Job $job)
     {
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         return view('jobseeker.job_details',compact('job'));
     }
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  \App\Job  $job
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Job $job)
     {
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $request->validate([
             'title'     =>  'required',
            
             'logo'    =>  'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
             'last_date'   =>  'required',
             'salary'   =>  'required',
             'description'   =>  'required',
             'short_description'   =>  'required',
         ]);
        if($request->logo){
         $imageName = time().'.'.$request->logo->extension();  
         $request->logo->move(public_path('logo'), $imageName);
        }
         $job->title = $request->title;
         if($request->logo){
            $job->logo = $imageName;
         }
         $job->last_date = $request->last_date;
         $job->salary = $request->salary;
         $job->job_link = $request->job_link;
         $job->description = $request->description;
         $job->short_description = $request->short_description;
         $job->save();
         return redirect()->back()->with('success', 'Job Updated Succesfully');
     }
     /**
      * Remove the specified resource from storage.
      *
      * @param  \App\Job  $job
      * @return \Illuminate\Http\Response
      */
     public function destroy(Job $job)
     {
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $job->delete();
         return redirect()->route('jobs.index')->with('success', 'Job Updated Succesfully');
     }
     public function destroy_job($id) {
        DB::delete('delete from jobs where id = ?',[$id]);
        return redirect()->back()->with('success', 'job has been removed successfully');
     }
     public function applied($id){
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $data = Apply::where('job_id',$id)->get();
         $job = Job::find($id);
         return view('applied',compact('data','job'));
     }
     public function jobwise_applide($id){
         if(Auth()->user()->status!="company"){
             return redirect()->to('/home');
         }
         $applide_data = DB::table('companies');
         $data = Apply::where('job_id',$id)->get();
         $job = Job::find($id);
         if(Auth()->user()->id != $job->com_name['user_id']){
             return redirect()->to('/home');
         }
         return view('jobwise_applide',compact('data','job', 'applide_data',));
     }
     public function change($id){
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $data = Apply::where('id',$id)->first();
         return view('change',compact('data'));
     }
     public function changestatus(Request $request){
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/home');
         }
         $apply = Apply::find($request->id);
         $apply->status = $request->status;
         $apply->save();
         return redirect()->back()->with('status', 'Status Updated Succesfully');
     }
     public function jobseeker_status($id){
         if(Auth()->user()->status!="company"){
             return redirect()->to('/home');
         }
         $app = Apply::find($id);
         
         if(Auth::user()->id == $app->job->com_name->user_id){
             $data = Apply::where('id',$id)->first();
         }else{
             return redirect()->to('/home');
         }
         return view('jobseeker_status',compact('data'));
     }
     public function update_jobseeker_status(Request $request){
         if(Auth()->user()->status!="company"){
             return redirect()->to('/home');
         }
         $apply = Apply::find($request->id);
         $apply->status = $request->status;
         $apply->save();
         return redirect()->back()->with('status', 'Status Updated Succesfully');
     }
     public function alljobs(){
         if(Auth()->user()->status!="user"){
             return redirect()->to('/');
         }
         $data = DB::table('jobs');
         // $jobs = Job::where('last_date','>=',date('Y-m-d'))->get()->sortBy('company');
         $jobs = Job::where('last_date','>=',date('Y-m-d'))->paginate(10000);
        //  $search_jobs = Job::where('last_date','>=',date('Y-m-d'))->groupBy('company')->get();
        $search_jobs = Job::where('last_date', '>=', date('Y-m-d'))
        ->select('company')
        ->distinct()
        ->get();
         $count = Job::get()->count();
         return view('alljobs',compact('jobs','search_jobs', 'data', 'count'));
     }
     public function my_jobs(){
         if(Auth()->user()->status!="user"){
             return redirect()->to('/');
         }
         $user = Auth()->user();
         $my_jobs = Apply::where('user_id',$user->id)->get();
         $count = Apply::where('user_id',$user->id)->count();
         return view('my_jobs',compact('user', 'my_jobs', 'count'));
     }
     public function applynow($id){
         if(Auth()->user()->status!="user"){
             return redirect()->to('/');
         }
         $user = Auth()->user();
        //  $client = new Client([
        //      'verify' => false
        //  ]);
        //  $data = array(
        //      'token' => '5uz$)[1j=3chbr9pz,32f7_1',
        //      'email' => $user->email
        //   );
        //   $response = $client->post(env('UNDP'), [
        //      'headers' => ['Content-Type' => 'application/json', 'Accept' => 'application/json'],
        //      'body'    => json_encode($data)
        //  ]); 
        //  $undp = json_decode($response->getBody(), true);
        //  if(!$undp['data']['is_registered'] || !$undp['data']['is_profile_completed']){
        //      return redirect()->back()->with('warning','Please register and complete your profile on Futurenation Platform');
        //  }
         $job = Job::find($id);
         $isapplied = Apply::where([
             ['job_id',$job->id],
             ['user_id',$user->id],
         ])->first();
         $jobseeker = Jobseeker::where('email',$user->email)->first();
         if($job->last_date<date('Y-m-d')){
             return redirect()->back()->with('warning','Job has been expired');
         }
         if($jobseeker->payment_status!=1){
             return redirect()->back()->with('warning','Admin approval is required');
         }
         if($isapplied){
             return redirect()->back()->with('warning','Already Applied');
         }
         $apply = new Apply;
         $apply->job_id = $job->id;
         $apply->status = "Initial";
         $apply->user_id = $user->id;
         $apply->resume = $jobseeker->resume;
         $apply->video = $jobseeker->video;
         $apply->save();
         return redirect()->back()->with('success','Applied Succesfully.We will contact you soon');
     }
     public function services(){
         $user = Auth()->User();
         $jobseeker  = Jobseeker::where('email',$user->email)->first();
         return view('events',compact('jobseeker'));
     }
     public function servicepay(Request $request){
         if(Auth()->user()->status!="user"){
             return redirect()->to('/');
         }
         $request->validate([
             'trix'     =>  'required',
         ]);
         $user = Auth()->User();
         $jobseeker  = Jobseeker::where('email',$user->email)->first();
         $jobseeker->trix = $request->trix;
         $jobseeker->save();
         return redirect()->back()->with('success','Submitted Succesfully. Admin approval is pending');
     }
     // public function companywise_jo(){
     //     $company = Company::where('user_id', Auth::user()->id)->get();
     //     $jobs = Job::where('jobs.company', $company->id)->get();
     //     return view('companywise_job',compact('company', 'jobs'));
     // }
     public function companywise_jobs()
     {
         if(Auth()->user()->status!="company"){
             return redirect()->to('/');
         }
         $company = Company::where('user_id', Auth::user()->id)->first();
         $jobs = Job::where('company', $company->id)->get();
         $count = Job::where('company', $company->id)->count();
         //dd($jobs);
         return view('companywise_job',compact('company','jobs', 'count')); 
     }
     public function view_jobseeker_status()
     {
         if(Auth()->user()->status!="admin"){
             return redirect()->to('/');
         }
         $status = Apply::where('status', 'Selected')->get();
         //dd($jobs);
         return view('view_jobseeker_status',compact('status'));
     }
     public function job_search(Request $request)
     {
         $data = DB::table('jobs');
         if( $request->title){
             $data = $data->where('title', 'LIKE', "%" . $request->title . "%");
         }
         if( $request->company){
             $data = $data->where('company', '=', $request->company);
         }
         $data = $data->paginate(20);
        //  $search_jobs = Job::where('last_date','>=',date('Y-m-d'))->groupBy('company')->get();
        // $search_jobs = Job::where('last_date', '>=', date('Y-m-d'))
        //            ->select('id', 'company')
        //            ->groupBy('id', 'company')
        //            ->get();
        $search_jobs = Job::where('last_date', '>=', date('Y-m-d'))
            ->select('company')
            ->distinct()
            ->get();
         return view('search', compact('data','search_jobs'));
     }
     public function search_job(Request $request)
     {
         $data = DB::table('jobs');
         if( $request->title){
             $data = $data->where('title', 'LIKE', "%" . $request->title . "%");
         }
         if( $request->company){
             $data = $data->where('company', '=', $request->company);
         }
         $data = $data->paginate(10000);
        //  $search_jobs = Job::where('last_date','>=',date('Y-m-d'))->groupBy('company')->get();
        $search_jobs = Job::where('last_date', '>=', date('Y-m-d'))
        ->select('company')
        ->distinct()
        ->get();
         return view('job_search', compact('data','search_jobs'));
     }
}
