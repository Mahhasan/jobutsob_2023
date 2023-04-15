<?php

namespace App\Http\Controllers;
ini_set('memory_limit', '-1');


use Illuminate\Http\Request;
use App\Models\Jobseeker;
use App\Models\Employer;
use App\Models\Company;
use App\Models\Department;
use App\Models\Faculty;
use App\Models\MastersDepartment;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    // public function jobseeker_info(Request $request)
    // {
    //     if(Auth()->user()->status!="admin"){
    //         return redirect()->to('/home');

    //     }

    //     $q = $request->q;
       
    //     $jobseekers = Jobseeker::paginate(50);
    //     #$jobseekers = Jobseeker::get();

      
    //     if($q != ""){
    //     $jobseekers = Jobseeker::where ( 'skill', 'LIKE', '%' . $q . '%' )
    //     //->whereYear('created_at', 2021)
    //     ->orWhere ( 'bachelor_institute', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'masters_institute', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'bachelor_subject', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'masters_subject', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'industry', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'description', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'trix', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'category', 'LIKE', '%' . $q . '%' )
    //     ->orWhere ( 'club', 'LIKE', '%' . $q . '%' )
       
    //     ->orWhere ( 'email', 'LIKE', '%' . $q . '%' )
        
    //     // ->latest()
    //     ->paginate (50)->setPath ( '' );
    //     $pagination = $jobseekers->appends ( array (
    //         'q' => $q 
    //       ) );
    //     }
       
       
    //     $count = Jobseeker::whereYear('created_at', 2021)->whereDate('created_at', '<=', "2021-08-31")->latest()->count();
    //     $fall21 = Jobseeker::whereYear('created_at', 2021)->whereDate('created_at', '>', "2021-08-31")->latest()->count();

    //     $count2 = Jobseeker::get()->count();

    //     return view('jobseeker.jobseeker_info',compact('jobseekers','count','count2','fall21'));
    // }
    public function jobseeker_info(Request $request)
    {
        if(Auth()->user()->status!="admin"){
            return redirect()->to('/home');

        }

        $dept_id = $request->bachelor_department_id;
        $keyword = $request->keyword;
        $type = $request->type;


        $jobseekers = Jobseeker::paginate(50);
        $index = $jobseekers->perPage() * ($jobseekers->currentPage() - 1);

        // if all not keyword
        if(isset($dept_id) && isset($type) && !isset($keyword)){
            //dd("dept_id");
        
            $jobseekers = Jobseeker::where ('bachelor_department_id', $dept_id)
            ->where ('certificate', $type)
           
            ->paginate (50)->setPath ( '' );
    
    
            $pagination = $jobseekers->appends ( 
                    array (
                    'bachelor_department_id' => $dept_id, 
                    'type' => $type, 
                   
                ) 
            );

            
        }

        else if(isset($dept_id) && isset($type) && isset($keyword)){
            //dd("dept_id");
        
            $jobseekers = Jobseeker::where ('bachelor_department_id', $dept_id)
            ->where ('certificate', $type)
            ->where ( 'skill', 'LIKE', '%' . $keyword . '%' )
           
            ->paginate (50)->setPath ( '' );
    
    
            $pagination = $jobseekers->appends ( 
                    array (
                    'keyword' => $keyword, 
                    'bachelor_department_id' => $dept_id, 
                    'type' => $type, 
                   
                ) 
            );

            
        }


        // if only department 

        else if(isset($dept_id)){
                   //dd("dept_id");
               
                   $jobseekers = Jobseeker::where ('bachelor_department_id', $dept_id)
                  
                   ->paginate (50)->setPath ( '' );
           
           
                   $pagination = $jobseekers->appends ( 
                           array (
                           'bachelor_department_id' => $dept_id 
                       ) 
                   );

                   
        }
        else if(isset($type)){
            //dd("dept_id");
        
            $jobseekers = Jobseeker::where ('certificate', $type)
           
            ->paginate (50)->setPath ( '' );
    
    
            $pagination = $jobseekers->appends ( 
                    array (
                    'type' => $type, 
                    
                ) 
            );

            
        }

        else if(isset($keyword)){
            //dd("dept_id");
        
            $jobseekers = Jobseeker::where ('skill', $keyword)
           
            ->paginate (50)->setPath ( '' );
    
    
            $pagination = $jobseekers->appends ( 
                    array (
                    'keyword' => $keyword, 
                   
                ) 
            );

            
        }


      
        //if only type

        //if keyword

        //if all

        
        
       
        
        #$jobseekers = Jobseeker::get();

      
        // if(($keyword != "" || $dept_id!='') && $type==''){
        //     // dd("loop1");
        //     $jobseekers = Jobseeker::where ( 'skill', 'LIKE', '%' . $keyword . '%' )
        // ->where ('bachelor_department_id', $dept_id)
        // //->whereYear('created_at', 2021)
      
        // // ->orWhere ( 'masters_institute', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'bachelor_subject', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'masters_subject', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'industry', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'description', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'trix', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'category', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'club', 'LIKE', '%' . $keyword . '%' )
       
        // // ->orWhere ( 'email', 'LIKE', '%' . $keyword . '%' )
        
        
        // // ->latest()
        // ->paginate (50)->setPath ( '' );


        // $pagination = $jobseekers->appends ( 
        //         array (
        //         'keyword' => $keyword, 
        //         'bachelor_department_id' => $dept_id 
        //     ) 
        // );
        
        // }

        // if($keyword != "" || $dept_id!='' && $type!='' ){
        //     // dd($dept_id);
        //     // dd( "loop2");
        // $jobseekers = Jobseeker::where ( 'skill', 'LIKE', '%' . $keyword . '%' )
        // ->where ('bachelor_department_id', $dept_id)
        // //->whereYear('created_at', 2021)
        // ->Where ( 'certificate ', 'LIKE', '%' . $type . '%' )
        // // ->orWhere ( 'masters_institute', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'bachelor_subject', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'masters_subject', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'industry', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'description', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'trix', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'category', 'LIKE', '%' . $keyword . '%' )
        // // ->orWhere ( 'club', 'LIKE', '%' . $keyword . '%' )
       
        // // ->orWhere ( 'email', 'LIKE', '%' . $keyword . '%' )
        
        
        // // ->latest()
        // ->paginate (50)->setPath ( '' );


        // $pagination = $jobseekers->appends ( 
        //         array (
        //         'keyword' => $keyword, 
        //         'bachelor_department_id' => $dept_id 
        //     ) 
        // );
        
        // }

          
       
        $count = Jobseeker::whereYear('created_at', 2021)->whereDate('created_at', '<=', "2021-08-31")->latest()->count();
        $fall21 = Jobseeker::whereYear('created_at', 2021)->whereDate('created_at', '>', "2021-08-31")->latest()->count();

        $count2 = Jobseeker::get()->count();
        $dept = Department::get();


        return view('jobseeker.jobseeker_info',compact('jobseekers','count','count2','fall21','dept', 'index'));
    }
    public function employer_info()
    {

        if(Auth()->user()->status!="admin"){
            return redirect()->to('/home');

        }
        $employers = Employer::all();
        return view('employer.employer_info',compact('employers'));
    }
    public function company_info()
    {
        if(Auth()->user()->status!="admin"){
            return redirect()->to('/home');

        }
         $data = DB::table('companies');
        $companies = Company::paginate(50);
        $index = $companies->perPage() * ($companies->currentPage() - 1);
        $count = Company::get()->count();
        return view('company_info',compact('companies', 'data', 'count', 'index'));
    }
}
