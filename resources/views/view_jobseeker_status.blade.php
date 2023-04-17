@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Jobseeker Status</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <div class="table-responsive">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="example">
                            <thead>
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Status</th>
                                    <th>Name</th>
                                    <th>Job Title</th>
                                    <th>Company</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($status as $index=>$value)
                                <tr class="odd gradeX">
                                    <td>{{++$index}}</td>
                                    <td>{{$value->status}}</td>
                                    <td>{{$value->user->name}}</td>
                                    <td>{{$value->job->title}}</td>
                                    <td>{{$value->job->com_name->name}}</td>
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
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>

<script>
   /* $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });*/
    $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        "order": [[ 0, "desc" ]]
    } );
} );
</script>
@endsection