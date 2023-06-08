@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <span class="text-info">Showing Results for:</span> <span class="text-warning">
                            <b>{{ request()->has('q') ? ucfirst(request()->get('q')) : '' }} {{ $data->total() }} </span></b>
                        </div>
                        <div class="col-md-6 mb-4">
                            <form action="{{ route('job_search') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select name="company" id="input" class="form-control">
                                            <option value="0">Select Company</option>
                                            @foreach($search_jobs as $job)
                                            <option value="{{$job->company}}">
                                                {{ \App\Models\Company::find($job->company)->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-5">
                                        <input type="text" name="title" class="form-control" placeholder="Search your favorite job">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-secondary" type="submit">Search</button>
                                    </div>   
                                </div>   
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Company Logo</th>
                                        <th>Company Name</th>
                                        <th>Last Date</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($data as $index=>$value)
                                    <tr class="odd gradeX" >
                                        <td>{{++$index}}</td>
                                        <td><h5 style="color:#2980b9"><b>{{ $value->title }}</b></h5> </td>
                                        <td ><img class="img img-responsive" width="100" 
                                        src="/logo/{{\App\Models\Company::find($value->company)->logo}}" alt="{{$value->logo}}">
                                        </td>
                                        <td>{{\App\Models\Company::find($value->company)->name}}</td>
                                        <td>{{$value->last_date}}</td>
                                        <td class="text-center"><a 
                                        class="btn  btn-primary"
                                        href="{{ route('jobs.show',$value->id) }}">View & Apply</a></td>
                                    </tr>
                                    @empty
                                    <h1 class="center m-2" style="color: #bc1d1a !important;">No Job Found</h1>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="row p-4">
                            {{ $data->appends(request()->except('page'))->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection