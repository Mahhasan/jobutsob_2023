@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Job Applicant ID #   {{ $data->id }}
                <a class="btn btn-sm btn-danger" href="{{ route('applied', $data->job_id) }}">Back</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('chamgestatus') }}" method="POST"  >
                    @CSRF
                    
                        
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">

                        <div class="form-group">
                        <label for="status">Select Status: Current: {{ $data->status }}</label>
                        <select class="form-control" id="status" name="status">
                            <option>Initial</option>
                            <option>Interview</option>
                            <option>Written</option>
                            <option>Viva</option>
                            <option>Final</option>
                            
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