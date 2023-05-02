@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header"><b>
                <img src="/logo/{{  \App\Models\Company::find($job->company)->logo }}"
                width="300px"
                alt="a"> <br>
                Job:</b> {{ $job->title}} @ 
                {{  \App\Models\Company::find($job->company)->name }}

                <b>Deadline:</b>  {{ $job->last_date }}
                <a class="btn btn-sm btn-danger" href="{{ route('jobs.index') }}">Back To All Jobs</a>
                </div>
                <div class="card-body">
                  <b>Job Description:</b> <br>
                  {!! $job->description !!}
           
                  <a href="{{ route('download.job.resumes', ['job_id' => $job->id]) }}" class="btn btn-primary">Download Resumes</a>


                    <hr>

                    <div class="table-responsive">
                    <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Eamil</th>
                                <th>Status</th>
                                <th>Resume</th>
                                <th>Video Resume</th>
                                <th>Action</th>
                                <th>Bachelor Department</th>
                                <th>University</th>
                                <th>Year/Semester</th>
                                <th>Bachelor Result</th>
                                <th>Masters Department</th>
                                <th>University</th>
                                <th>Year/Semester</th>
                                <th>Bachelor Result</th>
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
                                <td>{{ $value->status }}
                                </td>
                                <td>
                                    @if(isset($value->resume))
                                    <a href="/resume/{{$value->resume}}" type="button" >Download</a>
                                    @else  
                                    <a href="/resume/{{$jobseeker->resume}}" type="button" >Download.</a>
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
                                <td><a href="{{ route('change',$value->id) }}">Click Here</a></td>
                                </td>
                                <td>{{$jobseeker->bachelor_subject}} {{ $jobseeker->bachelor_status }}</td>
                                <td>{{ $jobseeker->bachelor_institute }}</td>
                                <td>{{ $jobseeker->bachelor_year }}</td>
                                <td>{{$jobseeker->bachelor_result}}</td>
                              
                                <td>{{$jobseeker->masters_subject}} {{ $jobseeker->masters_status }}</td>
                                <td>{{ $jobseeker->masters_institute }}</td>
                                <td>{{ $jobseeker->masters_year }}</td>
                                <td>{{$jobseeker->masters_result}}</td>
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