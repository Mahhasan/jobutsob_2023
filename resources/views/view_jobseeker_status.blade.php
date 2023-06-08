@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Jobseeker Status</div>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($status as $index=>$value)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->user->name}}</td>
                                    <td>
                                        @if ($value->job)
                                            {{$value->job->title}}
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        @if ($value->job && $value->job->com_name)
                                            {{$value->job->com_name->name}}
                                        @else
                                            N/A
                                        @endif
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