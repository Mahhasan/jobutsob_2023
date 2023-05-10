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
                    <small class="text-left">
                        <abbr title="Go to Previous page">
                            <a style="text-decoration: none;" href="{{ URL::previous() }}">
                            <i class="fa fa-arrow-left"></i> Get Back</a></abbr></small>
                
            
                
            </div>
                
                <!-- <hr style="border-color: #449fdc;"> -->
                

                <div class="card-body">
                   
                 

                    <p><b>Job Title: </b><span style="color:#2980b9; font-size: 18px;"><b>{{ $job->title }}</b></span> </p>
                    <p><b>Deadline: {{ $job->last_date }}</b></p>
                    <p><b>Salary: {{ $job->salary }}</b></p>
                    <p><b>Company: </b>{{ \App\Models\Company::find($job->company)->name }}</p>
                    <p><img src="/logo/{{ $job->logo}}" alt="" class="img img-responsive" width="150px"></p>
                    <p><b>Job Description: </b></p>
                    {!! $job->description !!}
                    <!--<a class="btn btn-danger" href="{{ route('alljobs') }}">Back To All Jobs</a>-->
                    <hr style="border-color: #449fdc;">
                    
                   
                    @if(!$isapplied)
                    <a class="btn btn-primary" href="{{ route('applynow',$job->id) }}">Apply Now</a>
                    @else 
                    <button class="btn btn-success" href="#" disabled> Already Applied</button>
                    @endif

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