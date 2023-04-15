@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Job Seeker ID #   {{ $data->id }}
                <a class="btn btn-sm btn-danger" href="{{ route('jobseekers') }}">Back</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('approvepayment') }}" method="POST"  >
                    @CSRF
                    
                        
                        <input type="hidden" class="form-control" id="id" name="id" value="{{ $data->id }}">

                        <p>TRIX ID:  {{ $data->trix }}</p>

                        <div class="form-group">
                        <label for="status">Select Payment Status: 
                            
                           
                        </label>
                        <select class="form-control" id="status" name="payment_status">
                            <option value="2"<?php echo $data->payment_status==2?'selected' : ''?>>Pending</option>
                            <option value="0"<?php echo $data->payment_status==0?'selected' : ''?>>Unpaid</option>
                            <option value="1"<?php echo $data->payment_status==1?'selected' : ''?>>Paid</option>
                    
                            
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