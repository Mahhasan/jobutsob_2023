@extends('layouts.master')
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> -->
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <small class="text-left">
                                <abbr title="Go to Previous page">
                                    <a style="text-decoration: none;" href="{{ route('companywise_jobs') }}"><i class="fa fa-arrow-left"></i>Get Back</a>
                                </abbr>
                            </small>
                            &nbsp; &nbsp;Job ID #{{ $job->id }} 
                        </div>
                        <div class="col-7">
                            {{ $job->title}} 
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img id="blah" src="/logo/{{  \App\Models\Company::find($job->company)->logo }}" width= 80%; class="rounded" alt="your image" />
                            <div class="mt-3">
                                <i class="far fa-building" aria-hidden="true"></i>
                                {{  \App\Models\Company::find($job->company)->name }}
                            </div>
                            <div class="mt-2">
                                <strong><i class="fas fa-money-bill-alt"></i> &nbsp; Salary:</strong> &#2547; {{ $job->salary }}
                            </div>
                            <div class="mt-2">
                                <strong><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Last Date:</strong>  {{ $job->last_date }}
                            </div>
                        </div>
                        <div class="col-md-8 text-left">
                            <div class="mb-3">
                                <strong>Short Description:</strong> {!! $job->short_description  !!}
                            </div>
                            <div class="mb-3">
                                <strong>Description:</strong> {!! $job->description !!}
                            </div>
                        </div>
                    </div><br>
                    <hr>
                    <div class="table-responsive">
                        <p class="text-right"><abbr title="Download all Resume">
                            <a href="{{ route('download.job.resumes', ['job_id' => $job->id]) }}" class="text-info">
                            <i class="fa fa-download" aria-hidden="true"></i></a></abbr>
                        </p>
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Eamil</th>
                                    <th>Mobile No.</th>
                                    <th>Bachelor Info</th>
                                    <th>Masters Info</th>
                                    <th>Status</th>
                                    <th>Resume</th>
                                    <th>Details</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $index=>$value)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <?php
                                        $user = App\Models\User::where('id',$value->user_id)->first();
                                        $jobseeker = App\Models\Jobseeker::where('email',$user->email)->first();
                                    ?>
                                    @if($jobseeker)
                                    <td>{{ $jobseeker->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $jobseeker->cell }}</td>
                                    <td>
                                        <abbr title="{{ $jobseeker->name }}'s Bachelor information &#013;{{$jobseeker->bachelor_faculty->faculty_name ?? ' '}}&#013;{{$jobseeker->bachelor_department->department_name ?? ' '}}&#013;Bachelor Status: {{$jobseeker->bachelor_status}}&#013;Result: {{$jobseeker->bachelor_result}}&#013;Passing Year: {{$jobseeker->bachelor_year}}&#013;Institute: {{$jobseeker->bachelor_institute}}">
                                        {{$jobseeker->bachelor_department->department_name ?? ' '}}</abbr></td>
                                    <td>
                                        <abbr title="{{ $jobseeker->name }}'s masters information &#013;{{$jobseeker->masters_faculty->faculty_name ?? ' '}}&#013;{{$jobseeker->masters_department->department_name ?? ' '}}&#013;Bachelor Status: {{ $jobseeker->masters_status }}&#013;Result: {{$jobseeker->masters_result}}&#013;Passing Year: {{$jobseeker->masters_year }}&#013;Institute: {{$jobseeker->masters_institute }}">
                                        {{$jobseeker->masters_department->department_name ?? ' '}}</abbr></td>
                                    
                                    <td>
                                        <abbr title="Update {{ $jobseeker->name }}'s status">
                                        <a style="text-decoration: none;" href="{{ route('jobseeker-status',$value->id) }}" class="text-info">{{ $value->status }} 
                                        <i class="fa fa-edit" aria-hidden="true"></i></a></abbr>
                                    </td>
                                    <td class="text-center"><abbr title="Download {{ $jobseeker->name }}'s resume">
                                        @if(isset($value->resume))
                                        <a href="/resume/{{$value->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a>
                                        @else  
                                        <a href="/resume/{{$jobseeker->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i></a>
                                        @endif</abbr>
                                        &nbsp; &nbsp;
                                        <abbr title="click to see {{ $jobseeker->name }}'s video resume">
                                        @if(isset($value->video))
                                        <a href="{{$value->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        @else
                                        <a href="{{$jobseeker->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i></a>
                                        @endif</abbr>
                                    </td>
                                    <td class="text-center">
                                        <abbr title="click to see {{ $jobseeker->name }}'s full information">
                                        <a class="text-info" href="" data-toggle="modal" data-target="#JobseekerDetails{{$value->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </abbr>
                                    </td>
                                    @endif
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
<!-- Modal -->
@foreach($data as $value)
<div class="modal fade" id="JobseekerDetails{{$value->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            @if($jobseeker)
            <div class="modal-header" style="border-bottom: 2px solid #3490dc;">
                <h5 class="modal-title" style="color: #3490dc;" id="exampleModalLabel"><b>{{ $jobseeker->name }}'s Details</b></h5><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="card-title">Name:<b> {{ $jobseeker->name }}</b></p>
                <p class="card-text">Email: {{ $user->email }}</p>
                <p class="card-text">Mobile: {{ $jobseeker->cell }}</p>

                <p class="card-text">Bachelor Information: </p>
                    <p class="pl-5" style="font-size: 14px">
                    {{$jobseeker->bachelor_faculty->faculty_name ?? ' '}}<br>
                    {{$jobseeker->bachelor_department->department_name ?? ' '}} <br>
                    Bachelor Status: {{$jobseeker->bachelor_status}} <br>
                    Result: {{$jobseeker->bachelor_result}} <br>
                    Passing Year/Semester: {{$jobseeker->bachelor_year}} <br>
                    Institute: {{$jobseeker->bachelor_institute}}</p>

                <p class="card-text">Masters Information: </p>
                    <p class="pl-5" style="font-size: 14px">
                    {{$jobseeker->masters_faculty->faculty_name ?? ' '}}<br>
                    {{$jobseeker->masters_department->department_name ?? ' '}} <br>
                    Bachelor Status: {{$jobseeker->masters_status}} <br>
                    Result: {{$jobseeker->masters_result}} <br>
                    Passing Year/Semester: {{$jobseeker->masters_year}} <br>
                    Institute: {{$jobseeker->masters_institute}}</p>

                <p class="card-text">Experience: {{ $jobseeker->experience }} years</p>
                <p class="card-text">Video Resume: 
                    <abbr title="click to see {{ $jobseeker->name }}'s video resume">
                    @if(isset($value->video))
                    <a href="{{$value->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;{{$jobseeker->video}}</a>
                    @else
                    <a href="{{$jobseeker->video}}" type="button" target="_blank"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;{{$jobseeker->video}}</a>
                    @endif</abbr>
                </p>
                <p class="card-text">Resume: 
                    <abbr title="Download {{ $jobseeker->name }}'s resume">
                    @if(isset($value->resume))
                    <a href="/resume/{{$value->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Resume</a>
                    @else  
                    <a href="/resume/{{$jobseeker->resume}}" type="button" class="text-info" target="_blank"><i class="fa fa-download" aria-hidden="true"></i>&nbsp;Resume</a>
                    @endif</abbr></p>
                <p class="card-text">Address: {{ $jobseeker->address }}</p>
                <p class="card-text">Skills: {{ $jobseeker->skill }}</p>
                <p class="card-text">Preferred Industry: {{ $jobseeker->industry }}</p>
            </div>
            <div class="modal-footer" style="border-top: 1px solid rgb(52, 144, 220);">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            @endif
        </div>
    </div>
</div>  
@endforeach
<script src="https://cdn.tiny.cloud/1/knybwr594mznrv6uagt4lxrf191ll7had91pnu370cyt11gg/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        menubar: false,
        plugins: "link image code",
        toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
    });
</script>
@endsection