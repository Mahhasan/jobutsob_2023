@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Jobs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <hr>
                    <div class="table-responsive">
                    <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Job ID</th>
                                <th>Details</th>
                                <th>Applied</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $index=>$value)
                            <tr class="odd gradeX">
                            
                                <td>{{++$index}}</td>
                                <td><h5 style="color:#2980b9"><b>{{ $value->title }}</b></h5></td>
                                <td>{{$value->job_id}}</td>
                                <td><a href="#">Check Details</a></td>
                                <td><a href="#">Click Here</a></td>
                           
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