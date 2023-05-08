@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">
                    <div class="row">
                        <div class=" col-md-6 pt-2 text-right">
                            <span class="text-info">Showing Results for:</span> <span class="text-warning">
                            <b>{{ request()->has('q') ? ucfirst(request()->get('q')) : '' }} {{ $jobseekers->total() }} </span></b>  
                        </div>
                        <div class="col-md-6 text-right">
                            <form action="" method="GET">
                                <div class="row">
                                    <div class="col-md-3">
                                        <select name="bachelor_department_id" id="input" class="form-control" style="font-size: 14px;">
                                            <option value="">Select Department</option>
                                            @foreach($dept as $d)
                                            <option value="{{$d->id}}">{{$d->department_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <select name="type" id="input" class="form-control" style="font-size: 14px;">
                                            <option value="">Select (Alumni/Student)</option>
                                            <option value="Student">Student</option>
                                            <option value="Alumni">Alumni</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <input type="text" name="keyword" class="form-control" placeholder="Search by Skill" style="font-size: 14px;">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-secondary" type="submit" style="font-size: 14px;">Search</button>
                                    </div>   
                                </div>   
                            </form>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <div style="display: flex; justify-content: space-between;">
                            <p class="text-info">Total Jobseekers: <b class="text-warning">{{ $count2 }}</b></p>
                            <p><abbr title="Download all Resume"><a onclick="return confirm('Are you sure you want to start downloading? ');" href="{{ route('download-resumes') }}" class="text-info">
                            <i class="fa fa-download" aria-hidden="true"></i></a></abbr></p>
                        </div>
                        
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile No.</th>
                                    <th>Bachelor Info</th>
                                    <th>Masters Info</th>
                                    <th>Transaction ID</th>
                                    <th>Payment Status</th>
                                    <th>Resume</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobseekers as $index=>$value)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->email}}</td>
                                    <td>{{$value->cell}}</td>
                                    <td>
                                        <abbr title="{{ $value->name }}'s Bachelor information &#013;{{$value->bachelor_faculty->faculty_name ?? ' '}}&#013;{{$value->bachelor_department->department_name ?? ' '}}&#013;Bachelor Status: {{$value->bachelor_status}}&#013;Result: {{$value->bachelor_result}}&#013;Passing Year: {{$value->bachelor_year}}&#013;Institute: {{$value->bachelor_institute}}">
                                        {{$value->bachelor_department->department_name ?? ' '}}</abbr></td>
                                    <td>
                                        <abbr title="{{ $value->name }}'s masters information &#013;{{$value->masters_faculty->faculty_name ?? ' '}}&#013;{{$value->masters_department->department_name ?? ' '}}&#013;Bachelor Status: {{ $value->masters_status }}&#013;Result: {{$value->masters_result}}&#013;Passing Year: {{$value->masters_year }}&#013;Institute: {{$value->masters_institute }}">
                                        {{$value->masters_department->department_name ?? ' '}}</abbr></td>
                                    
                                    <td>{{$value->trix}}</td>
                                    <td><abbr title="Update {{ $value->name }}'s payment status">
                                        <a style="text-decoration: none;" href="{{ route('approve',$value->id) }}" type="button">
                                            <?php 
                                                if($value->payment_status==1){
                                                    echo "<span class=\"badge badge-success\">Paid</span>";
                                                }
                                                else if($value->payment_status==2){
                                                    echo "<span class=\"badge badge-warning\">Pending</span>";
                                                }
                                                else {
                                                    echo "<span class=\"badge badge-danger\">Unpaid</span>";
                                                }
                                            ?>
                                            <span class="text-info"><i class="fa fa-edit" aria-hidden="true"></i></span>
                                        </a>
                                    </td>
                                   
                                    <td class="text-center"><abbr title="Download {{ $value->name }}'s resume"> 
                                        <a class="text-info" href="/resume/{{$value->resume}}" target="_blank">
                                        <i class="fa fa-download" aria-hidden="true"></i></a></abbr>
                                        &nbsp; &nbsp;
                                        <abbr title="click to see {{ $value->name }}'s video resume">
                                        <a href="{{$value->video}}" type="button" target="_blank">
                                            <i class="fa fa-link" aria-hidden="true"></i></a></abbr>
                                    </td>
                                    <td class="text-center">
                                        <abbr title="click to see {{ $value->name }}'s full information">
                                        <a class="text-info" href="" data-toggle="modal" data-target="#JobseekersDetails{{$value->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </abbr>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                  
                    </table>


                    </div>
                    {{ $jobseekers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@foreach($jobseekers as $value)
<div class="modal fade" id="JobseekersDetails{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="border-bottom: 2px solid #3490dc;">
                <h5 class="modal-title" style="color: #3490dc;" id="exampleModalLabel"><b>{{ $value->name }}'s Details</b></h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="card-title">Name:<b> {{ $value->name }}</b></p>
                <p class="card-text">Email: {{ $value->email }}</p>
                <p class="card-text">Mobile: {{ $value->cell }}</p>

                <p class="card-text">Bachelor Information: </p>
                    <p class="pl-5" style="font-size: 14px">
                    {{$value->bachelor_faculty->faculty_name ?? ' '}}<br>
                    {{$value->bachelor_department->department_name ?? ' '}} <br>
                    Bachelor Status: {{$value->bachelor_status}} <br>
                    Result: {{$value->bachelor_result}} <br>
                    Passing Year/Semester: {{$value->bachelor_year}} <br>
                    Institute: {{$value->bachelor_institute}}</p>

                <p class="card-text">Masters Information: </p>
                    <p class="pl-5" style="font-size: 14px">
                    {{$value->masters_faculty->faculty_name ?? ' '}}<br>
                    {{$value->masters_department->department_name ?? ' '}} <br>
                    Bachelor Status: {{$value->masters_status}} <br>
                    Result: {{$value->masters_result}} <br>
                    Passing Year/Semester: {{$value->masters_year}} <br>
                    Institute: {{$value->masters_institute}}</p>

                <p class="card-text">Experience: {{ $value->experience }} years</p>
                <p class="card-text">Video Resume: 
                    <abbr title="click to see {{ $value->name }}'s video resume">
                    @if(isset($value->video))
                    <a href="{{$value->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;{{$value->video}}</a>
                    @else
                    <a href="{{$value->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;{{$value->video}}</a>
                    @endif</abbr>
                </p>
                <p class="card-text">Resume: 
                    <abbr title="Download {{ $value->name }}'s resume">
                    @if(isset($value->resume))
                    <a href="/resume/{{$value->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Resume</a>
                    @else  
                    <a href="/resume/{{$value->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Resume</a>
                    @endif</abbr></p>
                <p class="card-text">Address: {{ $value->address }}</p>
                <p class="card-text">Skills: {{ $value->skill }}</p>
                <p class="card-text">Preferred Industry: {{ $value->industry }}</p>
            </div>
            <div class="modal-footer" style="border-top: 1px solid rgb(52, 144, 220);">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            
        </div>
    </div>
</div>  
@endforeach
@endsection