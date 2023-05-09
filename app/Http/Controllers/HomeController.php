<?php

namespace App\Http\Controllers;
ini_set('memory_limit', '-1');


use Illuminate\Http\Request;
use App\Models\Jobseeker;
use App\Models\Employer;
use App\Models\Company;
use App\Models\Department;
use App\Models\Apply;
use App\Models\User;
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
            ->where ('jobseeker_type', $type)
           
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
            ->where ('jobseeker_type', $type)
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
        
            $jobseekers = Jobseeker::where ('jobseeker_type', $type)
           
            ->paginate (50)->setPath ( '' );
    
    
            $pagination = $jobseekers->appends ( 
                    array (
                    'type' => $type, 
                    
                ) 
            );

            
        }

        
        else if(isset($keyword)){
            $jobseekers = Jobseeker::where('skill', 'LIKE', '%' . $keyword . '%')
                ->paginate(50)
                ->setPath('');
        
            $pagination = $jobseekers->appends(['keyword' => $keyword]);
        }



     
        

        // else if(isset($keyword)){
        //     $jobseekers = Jobseeker::where ('skill', $keyword)->paginate (50)->setPath ( '' );
        //     $pagination = $jobseekers->appends ( 
        //             array (
        //             'keyword' => $keyword, 
        //         ) 
        //     );
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
        $companies = Company::all();
        // $index = $companies->perPage() * ($companies->currentPage() - 1);
        $count = Company::get()->count();
        return view('company_info',compact('companies', 'data', 'count',));
    }
}
