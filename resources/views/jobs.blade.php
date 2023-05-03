@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header" style="display: flex; justify-content: space-between;">
                    <p class="card-title text-info">[ Total Jobs:  <b class="text-warning">{{ $count }}</b> ]</p>
                    <p class="card-title"><a  href="{{ route('jobs.create') }}" style="text-decoration: none;"><i class="fa fa-plus"></i> Create New</a></p>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                            <thead>
                                <tr>
                                    <th>Sl.</th>
                                    <th>Job Title</th>
                                    <th>Company Logo</th>
                                    <th>Company Name</th>
                                    <th>Last Date</th>
                                    <th>Action</th>
                                    <th>Applied</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $index=>$value)
                                
                                <tr class="odd gradeX">
                                
                                    <td>{{++$index}}</td>
                                    <td><b>{{$value->title}}</b></td>
                                    <td>
                                        <img class="img img-responsive" width="125" 
                                        src="/logo/{{\App\Models\Company::find($value->company)->logo}}" alt="{{$value->logo}}">
                                    </td>
                                    <td>
                                        {{
                                        \App\Models\Company::find($value->company)->name 
                                    }} 
                                    </td> 
                                    
                                    <td>{{$value->last_date}}</td>
                                    <td>
                                        <a class="text-info" href="" data-toggle="modal" data-target="#example{{$value->id}}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        &nbsp;<a class="text-success" href="{{ route('jobs.edit',$value->id) }}" class=""><i class="fa fa-edit" aria-hidden="true"></i></a>
                                        &nbsp;<a class="text-danger" onclick="return confirm('Are you sure want to delete? ');" href ="destroy_job/{{ $value->id }}"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    </td>
                                    <td><a href="{{ route('applied',$value->id) }}" class="arrow-button"><?php
                                    $x = App\Models\Apply::where('job_id',$value->id)->count();
                                    ?>
                                    {{ $x }} applied</a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $jobs->appends(request()->except('page'))->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
@foreach($jobs as $value)
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