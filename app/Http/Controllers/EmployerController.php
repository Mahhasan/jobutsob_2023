<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return vieW('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'company_name'     =>  'required',
            'person_name'  =>  'required',
            
            //'resume'    =>  'required',
        ]);
        $logo = $request->file('logo');
        $new_logo = rand() . '.' . $logo->getClientOriginalExtension();
        $logo->move(public_path('logo'), $new_logo);

        $form_data = array(
            'company_name'         =>   $request->company_name,
            'address'    =>   $request->address,
            'person_name'      =>   $request->person_name,
            'cell'    =>   $request->cell,
            'email'    =>   $request->email,
            'job_category'   =>   $request->job_category,
            'task'    =>   $request->task,
            'salary'    =>   $request->salary,
            'logo'    =>   $request->logo,
            'skill' => implode(',', (array) $request->get('skill')),
            'logo'    =>   $new_logo
        );
        //var_dump($form_data);
        $data = Employer::create($form_data);
      
        return redirect('/reg/employer/create')->with('success', 'Registration Successfull');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
