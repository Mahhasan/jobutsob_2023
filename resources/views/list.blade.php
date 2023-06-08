@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-3" style="box-shadow: 0px 2px #3498db;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="card-title">All Jobs</h5>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('job.search') }}" method="GET">
                                <div class="row">
                                    <div class="col-md-5">
                                        <select name="company" id="input" class="form-control">
                                            <option value="0">Select Company</option>
                                            @foreach($search_jobs as $value)
                                                <option value="{{$value->company}}">
                                                {{ \App\Models\Company::find($value->company)->name}}
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
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach($jobs as $index=>$value)
        <div class="col-md-6">
            <div class="card mb-3" style="box-shadow: 0px 2px #3498db;">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card-body" style="line-height: .9;">
                            <p class="card-text"><b> Job Title: {{$value->title}}</b></p>
                            <p class="card-text">Company: {{ \App\Models\Company::find($value->company)->name }}</p>
                            <p>Last Date:{{$value->last_date}}</p>
                            <a style="text-align: right; color: white;" class="btn btn-sm btn-primary " data-toggle="modal" data-target="#example{{$value->id}}">Job Details</a>
                            @if(Auth::check() && Auth::user()->status == "user")
                            <a href="{{ route('details',$value->id) }}" class="btn btn-sm btn-primary">Apply</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="card-img-top mt-3 pr-3" src="/logo/{{\App\Models\Company::find($value->company)->logo}}" alt="{{$value->title}} {{ $value->company }}">
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="example{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: 2px solid #3490dc;">
                        <h5 class="modal-title" style="color: #3490dc;" id="exampleModalLabel"><b>Job Description </b></h5><br>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5 class="card-title">Job Title:<b> {{$value->title}}</b></h5>
                        <p class="card-text">Company:<b> {{ \App\Models\Company::find($value->company)->name }}</b></p>
                        <p>Last Date:<b> {{$value->last_date}}</b></p>
                        <p class="card-text">Short Description: {!! $value->short_description !!}</p>
                        <p class="card-text">Description: {!! $value->description !!}</p>
                    </div>
                    <div class="modal-footer" style="border-top: 1px solid rgb(52, 144, 220);">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="">
    {{ $jobs->appends(request()->except('page'))->links() }}
    </div>
</div>
@endsection