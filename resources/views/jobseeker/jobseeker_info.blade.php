@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="row">
                    <div class=" col-md-6 pt-2"><b>Jobseeker Info.</b>[ Total Jobseekers:  <b class="text-success">{{ $count2 }}</b> ]
                        [Showing Results for <span style="color:red"><b>{{ request()->has('q') ? ucfirst(request()->get('q')) : '' }} : {{ $jobseekers->total() }} </span></b>]  
                    </div>
                    <div class="col-md-6 pt-2">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <select name="bachelor_department_id" id="input" class="form-control">
                                        <option value="">Select Department</option>
                                        @foreach($dept as $d)
                                        <option value="{{$d->id}}">{{$d->department_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select name="type" id="input" class="form-control">
                                        <option value="">Select Type(Alumni/Student)</option>
                                        <option value="Student">Student</option>
                                        <option value="Alumni">Alumni</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="keyword" class="form-control" placeholder="Search by keyword">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>   
                            </div>   
                        </form>
                    </div>
                </div>
                
                <div class="card-body">
                <a href="{{ route('download-resumes') }}" class="btn btn-primary">Download Resumes</a>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>Sl No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Cell</th>
                                    <th>Bachelor</th>
                                    <th>Masters</th>
                                    <th>TRIX</th>
                                    <th>Payment Status</th>
                                    <th>Resume</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobseekers as $value)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->cell}}</td>
                                    <td>
                                        <b>Faculty: </b>{{$value->bachelor_faculty->faculty_name ?? ' '}} <br><b>Department: </b>{{$value->bachelor_department->department_name ?? ' '}} | <b>University: </b>{{ $value->bachelor_institute }} |
                                        <b>Result: </b>{{$value->bachelor_result}} | <b>Year/Semester: </b>{{ $value->bachelor_year }} | 
                                        <b>Status: </b>{{ $value->bachelor_status }}
                                        
                                    </td>
                                    <td>
                                        <b>Faculty: </b> {{$value->master_faculty->faculty_name ?? ' '}} <b>Department: </b> {{$value->master_department->department_name ?? ' '}} | <b>University: </b>{{ $value->masters_institute }} |
                                        <b>Result: </b>{{$value->masters_result}} | <b>Year/Semester: </b>{{ $value->masters_year }} | 
                                        <b>Status: </b>{{ $value->masters_status }}
                                        
                                    </td>
                                    <td>{{$value->trix}}</td>
                                    <td>
                                        <a class="btn btn-sm btn-warning" href="{{ route('approve',$value->id) }}" type="button" >
                                            <?php 
                                             if($value->payment_status==1){
                                                 echo "Paid";
                                             }
                                             else if($value->payment_status==2){
                                                 echo "Pending";
                                             }
                                             else {
                                                 echo "Unpaid";
                                             }
                                            
                                            ?>
                                        </a>
                                    </td>
                                    <td> <a 
                                    class="btn btn-sm btn-success"
                                    href="/resume/{{$value->resume}}" type="button" target="_blank">Download CV</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                  
                    </table>

                    {{ $jobseekers->links() }}

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- DataTables -->






@endsection