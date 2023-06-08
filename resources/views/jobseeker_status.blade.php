@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">
                    <small class="text-left"><a href="{{ route('jobwise-applide', $data->job_id) }}" style="text-decoration: none;">
                    <i class="fa fa-arrow-left"></i> Get Back</a></small>&nbsp;&nbsp;&nbsp;
                    Job Applicant ID #   {{ $data->id }}
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <form action="{{ route('update-jobseeker-status') }}" method="POST"  >
                        @CSRF
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">
                        Current Status: {{ $data->status }}
                        <div class="form-group">
                            <label for="status">Update Status:</label>
                            <select class="form-control" id="status" name="status">
                                <option>Initial</option>
                                <option>Interview</option>
                                <option>Written</option>
                                <option>Viva</option>
                                <option>Selected</option>
                                <option>Rejected</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection