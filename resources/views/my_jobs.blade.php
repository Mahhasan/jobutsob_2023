@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-body">
                    <div class="table-responsive">
                    <p class="text-info">Total Applied Job: <b class="text-warning">{{$count}}</b></p>
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Job Title & Company</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($my_jobs as $index=>$value)
                                <tr class="odd gradeX" >
                                    <td>{{++$index}}</td>
                                    @if($job = App\Models\Job::find($value->job_id))
                                        <td><b>{{ $job->title }}</b> at <b>{{ $job->com_name->name }}</b></td>
                                    @else
                                        <td class="text-danger">This Job expired or deleted</td>
                                    @endif
                                    <td>{{$value->status}}</td>
                                    <td class="text-center">
                                    <abbr title="Click to see job details">
                                        <a class="text-info" href="{{ route('jobs.show',$value->job_id) }}"><i class="fa fa-eye" aria-hidden="true"></i></a></abbr>
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