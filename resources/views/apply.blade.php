@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if (session('warning'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('warning') }}
                        </div>
                    @endif
                    @if($errors->any())
                      {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">
                <a class="btn btn-danger" href="{{ route('alljobs') }}">Back To All Jobs</a>
                
                @if(!$undp['data']['is_registered'] || !$undp['data']['is_profile_completed'])

               <br><b>"Before applying a job, Please register using</b> &nbsp;<em class="text-success">{{$user = Auth()->user()->email}}</em>&nbsp; <b>and complete your profile on Futurenation Platform"</b> 
               <a href="https://platform.futurenation.gov.bd" target="blank"><em>&nbsp; https://platform.futurenation.gov.bd</em></a>
                @else 
                
                @if(!$isapplied)
                <a class="btn btn-primary" href="{{ route('applynow',$job->id) }}">Apply Now</a>
                @else 
                <button class="btn btn-success" href="#" disabled> Already Applied</button>
                @endif
            </div>
                
                @endif
                <hr style="border-color: #449fdc;">
                

                <div class="card-body">
                   
                 

                    <p><b>Job Title: </b><h5 style="color:#2980b9"><b>{{ $job->title }}</b></h5> 
                    <p><b>Deadline: {{ $job->last_date }}</b></p>
                    </p>
                    <p><b>Company: </b>{{ \App\Models\Company::find($job->company)->name }}</p>
                    <p><img src="/logo/{{ $job->logo}}" alt="" class="img img-responsive" width="150px"></p>
                    <p><b>Job Description: </b></p>
                    {!! $job->description !!}
                    <!--<a class="btn btn-danger" href="{{ route('alljobs') }}">Back To All Jobs</a>-->
                    <hr style="border-color: #449fdc;">
                    @if(!$undp['data']['is_registered'] || !$undp['data']['is_profile_completed'])
    
                    <br><b>"Before applying a job, Please register using</b> &nbsp;<em class="text-success">{{$user = Auth()->user()->email}}</em>&nbsp; <b>and complete your profile on Futurenation Platform"</b> 
                    <a href="https://platform.futurenation.gov.bd" target="blank"><em>&nbsp; https://platform.futurenation.gov.bd</em></a>
                    @else 
                   
                    @if(!$isapplied)
                    <a class="btn btn-primary" href="{{ route('applynow',$job->id) }}">Apply Now</a>
                    @else 
                    <button class="btn btn-success" href="#" disabled> Already Applied</button>
                    @endif

                </div>
                @endif
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