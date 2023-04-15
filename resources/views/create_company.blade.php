@extends('layouts.master')

@section('content')
<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Create Company </div>
                

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    @if($errors->any())
                      {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif

                    <form action="{{ route('create_company_post') }}" method="POST" enctype="multipart/form-data" >
                    @CSRF
            
                    <div class="form-group">
                        <label for="name">Company Name:</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo:</label>
                        <input id="logo" type="file" class="form-control" name="logo" required >
                    </div> 
                    <div class="form-group">
                        <label for="location">Company Location:</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Executive Name</label>
                        <input type="text" class="form-control" id="executive_name" name="executive_name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
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