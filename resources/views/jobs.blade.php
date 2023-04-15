@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">All Jobs [ Total Jobs:  <b class="text-success">{{ $count }}</b> ]</div>
                

                <div class="card-body">
                    <div class="table-responsive">
                    <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                        <thead>
                            <tr>
                                <th>Sl No.</th>
                                <th>Title</th>
                                <th>Company Logo</th>
                                <th>Company Name</th>
                                <th>Last Date</th>
                                <th>Job ID</th>
                                <th>Details</th>
                                <th>Applied</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($jobs as $value)
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
                                <td>{{$value->job_id}}</td>
                                <td><a href="{{ route('jobs.edit',$value->id) }}">Check Details</a></td>
                                <td><a href="{{ route('applied',$value->id) }}">Click Here</a>
                                
                                <?php
                                  $x = App\Models\Apply::where('job_id',$value->id)->count();
                                ?>
                                <p>{{ $x }} applied</p>
                                </td>
                           
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