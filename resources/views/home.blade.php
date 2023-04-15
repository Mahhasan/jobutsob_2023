@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Coming soon
                    <ul>
                    @if(Auth::check() && Auth::user()->status=="admin")
                        <li><a href="{{action('HomeController@jobseeker_info')}}" >Job Seeker</a></li>
                        <li><a href="{{action('HomeController@employer_info')}}" >Employer</a></li>
                    @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
