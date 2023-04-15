@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Create A New Job </div>
                

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                      {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif

                    <form action="{{ route('jobs.store') }}" method="POST" enctype="multipart/form-data" >
                    @CSRF
                    <div class="form-group">
                        <label for="title">Job Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>
                    <div class="form-group">
                        <label for="company">Company:</label>
                        <select class="js-example-basic-multiple js-states form-control" name="company" >
                        @foreach($companies as $company)   
                           <option value="{{ $company->id }}" >{{ $company->name }}
                               
                           </option>
                        @endforeach
                        </select>
                    </div>
                    <!-- <div class="form-group">
                        <label for="logo">Logo:</label>
              
                        <input id="logo" type="file" class="form-control" name="logo" required >

                    </div> -->

                    <div class="form-group">
                        <label for="company">Last Date:</label>
                        <input type="date" class="form-control" id="last_date" name="last_date" required value="2021-06-20">
                        
                    </div>
                    <div class="form-group">
                        <label for="job_id">Main Site Job ID:</label>
                        <input type="text" name="job_id" class="form-control" id="job_id" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Job Description</label>
                        <textarea class="form-control" id="description" name="description" rows="10" ></textarea>
                    </div>

                    <div class="form-group">
                        <label for="short_description">Job Short Description</label>
                        <textarea class="form-control" id="short_description" name="short_description" rows="10" ></textarea>
                    </div>



                    
                    
                   
                   
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
           

                    
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