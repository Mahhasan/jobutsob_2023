@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">All Jobs </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <!-- <th>Job ID</th> -->
                                    <th>Job Title</th>
                                    <th>Job Details</th>
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
                                    <td>{!!$value->short_description!!}</td>
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