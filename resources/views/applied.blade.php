@extends('layouts.master')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <small class="text-left"><a style="text-decoration: none;" href="{{ route('jobs.index') }}"><i class="fa fa-arrow-left"></i> Get Back</a></small>
                            &nbsp; &nbsp;Job ID #{{ $job->id }} 
                        </div>
                        <div class="col-7">
                            {{ $job->title}} 
                        </div>
                        <div class="col-1 text-right">
                            <a class="text-info" href="{{ route('jobs.edit',$job->id) }}" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="card-body">
                <div class="row">
            <div class="col-md-4">
                <img id="blah" src="/logo/{{  \App\Models\Company::find($job->company)->logo }}" height="240" class="rounded" alt="your image" />
                <div class="mt-3">
                    <i class="far fa-building" aria-hidden="true"></i>
                    {{  \App\Models\Company::find($job->company)->name }}
                </div>
                <div class="mt-3">
                    <strong><i class="fa fa-calendar" aria-hidden="true"></i>&nbsp;Last Date:</strong>  {{ $job->last_date }}
                </div>
                <!-- <a href="" class="btn btn-outline-primary btn-sm btn-block">Get Register</a> -->
            </div>
            <div class="col-md-8 text-left">
                <div class="mb-3">
                    <strong>Short Description:</strong> {!! $job->short_description  !!}
                </div>
                <div class="mb-3">
                    <strong>Description:</strong> {!! $job->description !!}
                </div>
                <!-- <a href="" class="btn btn-primary">Edit</a>
                <form action="" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>   -->
            </div>
        </div><br>
                    <hr>

                    <div class="table-responsive">
                    <p class="text-right"><abbr title="Download all Resume"><a href="{{ route('download.job.resumes', ['job_id' => $job->id]) }}" class="text-info">
                        <i class="fa fa-download" aria-hidden="true"></i></a></abbr></p>
                    <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Eamil</th>
                                <th>Status</th>
                                <th>Resume</th>
                                <th>Video Resume</th>
                                <th>Bachelor Info</th>
                                <!-- <th>University</th>
                                <th>Passing Year/Semester</th>
                                <th>Bachelor Result</th> -->
                                <th>Masters Info</th>
                                <!-- <th>University</th>
                                <th>Passing Year/Semester</th>
                                <th>Bachelor Result</th> -->
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
                                <td><a style="text-decoration: none;" href="{{ route('change',$value->id) }}" class="text-info">{{ $value->status }} <i class="fa fa-edit" aria-hidden="true"></i></a>
                                </td>
                                <td class="text-center">
                                    @if(isset($value->resume))
                                    <a href="/resume/{{$value->resume}}" type="button" class="text-info"><i class="fa fa-download" aria-hidden="true"></i></a>
                                    @else  
                                    <a href="/resume/{{$jobseeker->resume}}" type="button" class="text-info"><i class="fa fa-download" aria-hidden="true"></i></a>
                                    @endif
                                </td>
                                <td>
                                    @if(isset($value->video))
                                    <a href="{{$value->video}}" type="button" target="_blank">Click Here</a>
                                    @elseif(isset($value->video))
                                    <a href="{{$jobseeker->video}}" type="button" target="_blank">Click Here</a>
                                    @else
                                    N/A
                                    @endif
                                </td>
                                </td>
                                <td>
                                    <button type="button" class="pmd-btn-raised pmd-tooltip" data-toggle="tooltip" data-placement="top" 
                                    title="
                                    faculty_name {{$jobseeker->bachelor_faculty->faculty_name ?? ' '}}
                                    department_name {{$jobseeker->bachelor_department->department_name ?? ' '}}
                                    bachelor_status {{$jobseeker->bachelor_status}}
                                    bachelor_result {{$jobseeker->bachelor_result}}
                                    bachelor_year {{$jobseeker->bachelor_year}}
                                    bachelor_institute{{$jobseeker->bachelor_institute}}">
                                        {{$jobseeker->bachelor_department->department_name ?? ' '}}</button>
                                </td>
                                <td>
                                    <button type="button" class="pmd-btn-raised pmd-tooltip" data-toggle="tooltip" data-placement="top" 
                                    title="
                                    {{$jobseeker->masters_faculty->faculty_name ?? ' '}} 
                                    {{$jobseeker->masters_department->department_name ?? ' '}} 
                                    {{ $jobseeker->masters_status }}
                                    {{$jobseeker->masters_result}}
                                    {{ $jobseeker->masters_year }}
                                    {{ $jobseeker->masters_institute }}">
                                        {{$jobseeker->masters_department->department_name ?? ' '}}</button>
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