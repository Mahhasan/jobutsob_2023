@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                 <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <small class="text-left">
                                <abbr title="Go to Previous page">
                                <a style="text-decoration: none;" href="{{ route('jobs.index') }}">
                                <i class="fa fa-arrow-left"></i> Get Back</a></abbr>
                            </small>
                        </div>
                        <div class="col-4 text-center">
                            Job ID #{{ $job->id }} 
                        </div>
                        <div class="col-4 text-right">
                            <form method="POST" action="{{  route('jobs.destroy',$job->id) }}">
                                @CSRF
                                {{ method_field('DELETE') }}
                                <button onclick="return confirm('Are you sure want to delete? ');" style="border:none; background: none;" type="submit" class="text-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                <!-- <div class="form-group">
                                    <input   type="submit" class="btn btn-danger btn btn-sm " value="Delete Job">
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif
                    <form action="{{ route('jobs.update',$job->id) }}" method="POST" enctype="multipart/form-data" >
                        @CSRF
                        @method('PUT')
                        <div class="form-group">
                            <label for="title">Job Title:</label>
                            <input type="text" class="form-control" id="title" name="title" required value="{{ $job->title }}">
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="company">Company:</label>
                                <input type="text" class="form-control"  disabled value="{{\App\Models\Company::find($job->company)->name}}">
                            </div>
                            <div class="col-sm-6">
                                <label for="logo">Logo:</label>
                                <img class="img img-responsive" width="100" height="100" src="/logo/{{$job->logo}}" alt="{{$job->logo}}">
                                <input id="logo" type="file" class="form-control" name="logo"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label for="company">Last Date:</label>
                                <input type="date" class="form-control" id="last_date" name="last_date" required  value="{{ $job->last_date }}">
                            </div>
                            <div class="col-sm-6">
                                <label for="salary">Salary:</label>
                                <input type="text" class="form-control" id="salary" name="salary" required  value="{{ $job->salary }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_link">Job Link:</label>
                            <input type="url" name="job_link" class="form-control" id="job_link" value="{{ $job->job_link }}">
                        </div>
                        <div class="form-group">
                            <label for="description">Job Description</label>
                            <textarea class="form-control" id="description" name="description" rows="10" >{!! $job->description !!}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="short_description">Job Short Description</label>
                            <textarea class="form-control" id="short_description" name="short_description" rows="10" >{!! $job->short_description !!}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.tiny.cloud/1/wcy885719biomngy7z5xj858nqthf5pg23gqfd8d5nfhze2w/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script type="text/javascript">
    tinymce.init({
        selector: "textarea",
        menubar: false,
        plugins: "link image code",
        toolbar: 'undo redo | styleselect | forecolor | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image | code'
    });
</script>
@endsection