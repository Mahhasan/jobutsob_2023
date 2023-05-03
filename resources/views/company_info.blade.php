@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <p class="card-title text-info">Company Info [ Total Company:  <b class="text-warning">{{ $count }}</b> ]</p>
                    <p class="card-title"><a  href="{{ route('create_company') }}" style="text-decoration: none;"><i class="fa fa-plus"></i> Create New</a></p>
                </div>
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
                                <th>Sl No.</th>
                                <th>Logo</th>
                                <th>Company</th>
                                <th>Location</th>
                               <!--  <th>Address</th>
                                <th>Email</th>
                                <th>Cell</th> -->
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $value)
                            <tr class="odd gradeX">
                                <td>{{++$index}}</td>
                                <td ><img class="img img-responsive p-3" width="125" 
                                src="/logo/{{$value->logo}}" alt="{{$value->logo}}">
                               
                                <td>{{$value->name}}</td>
                                <td>{{$value->location}}</td>
                                <!-- <td>{{$value->job_category}}</td>
                                <td>{{$value->address}}</td>
                                <td>{{$value->cell}}</td>
                                <td>{{$value->email}}</td> -->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection