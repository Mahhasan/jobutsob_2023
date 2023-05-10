@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="card-header" style="display: flex; justify-content: space-between;">
                            <p class="text-info">Total Job: <b class="text-warning">{{$count}}</b></p>
                            <p class="text-info">Job list of <b class="text-warning">{{$company->name}}</b></p>
                        </div>
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <!-- <th>Job ID</th> -->
                                    <th>Job Title</th>
                                    <th>Salary</th>
                                    <th>Last Date</th>
                                    <th>Applied</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $index=>$value)
                                <tr class="odd gradeX" >
                                    <td>{{++$index}}</td>
                                    <!-- <td>{{$value->id}}</td> -->
                                    <td>{{$value->title}}</td>
                                    <td>{{$value->salary}}</td>
                                    <td>{{$value->last_date}}</td>
                                    <td><a href="{{ route('jobwise-applide',$value->id) }}">Click Here</a>
                                
                                <?php
                                  $x = App\Models\Apply::where('job_id',$value->id)->count();
                                ?>
                                <p>{{ $x }} applied</p>
                                </td>
                           
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection