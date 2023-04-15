@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">My Jobs </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($user->applies as $index=>$value)
                                <tr class="odd gradeX" >
                                    <td>{{++$index}}</td>
                                    <td><b>{{App\Models\Job::find($value->job_id)->title}}</b> at <b>{{App\Models\Job::find($value->job_id)->com_name->name}}</b></td>
                                    <td>{{$value->status}}</td>
                                    <td class="text-center"><a 
                                    class="btn  btn-success"
                                    href="{{ route('jobs.show',$value->job_id) }}">View Job Details</a></td>
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