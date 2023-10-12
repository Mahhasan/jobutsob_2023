@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card" style="box-shadow: 0px 2px #3498db; background: #dfe6e9;">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <p>Create Company </p>
                    <p><a  href="{{ route('company') }}" style="text-decoration: none;"><i class="fa fa-list"></i> See list</a></p>
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
                    <form action="{{ route('create_company_post') }}" method="POST" enctype="multipart/form-data" >
                    @CSRF
                    <h5 style="color: #4d4d4d;">Company Information:</h5>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="name">Company Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="logo">Logo</label>
                            <input id="logo" type="file" class="form-control" name="logo" required >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="location">Company Location</label>
                        <input type="text" class="form-control" id="location" name="location" required>
                    </div>
                    <h5 style="color: #4d4d4d;" class="mt-4">Contact Person Information:</h5>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="executive_name">Executive Name</label>
                            <input type="text" class="form-control" id="executive_name" name="executive_name" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" name="designation" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="col-sm-6">
                            <label for="cell">Mobile</label>
                            <input type="number" class="form-control" id="cell" name="cell" required>
                        </div>
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