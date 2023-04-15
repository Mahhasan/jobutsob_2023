@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="row">
                    <div class="col-md-7 card-header">Jobseeker Info.[ Total Jobseekers:  <b>{{ $count2 }}</b> ]
                        [<b>Showing Results for <span style="color:red">{{ request()->has('q') ? ucfirst(request()->get('q')) : '' }} : {{ $jobseekers->total() }} </span></b>]  
                    </div>
                    <div class="col-md-5 card-header">
                        <form action="{{ route('jobseeker.search') }}" method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                    <select name="bachelor_subject" id="input" class="form-control">
                                        <option value="0">Select Department</option>
                                        @foreach($jobseekers as $value)
                                            <option value="{{$value->bachelor_subject}}">
                                            {{ \App\Models\Jobseeker::find($value->bachelor_subject)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-5">
                                    <input type="text" name="name" class="form-control" placeholder="Search Jobseeker">
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-secondary" type="submit">Search</button>
                                </div>   
                            </div>   
                        </form>
                    </div>
                </div>
                
    


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                  <!--  <div class="col-md-3">-->
                  <!--  <form action="{{ route('jobseekers') }}" method="GET" role="search">-->
                      
                  <!--    <div class="input-group">-->
                  <!--        <input type="text" class="form-control" name="q"-->
                  <!--            placeholder="Search skills,categories,universities,clubs or email"> <span class="input-group-btn">-->
                  <!--            <button type="submit" class="btn btn-default">-->
                  <!--                Search-->
                  <!--            </button>-->
                  <!--        </span>-->
                  <!--    </div>-->
                  <!--</form>-->
                  <!--  </div>-->

                    <!--<hr>-->
                    <div class="table-responsive">
                    <table  width="100%" class="table table-striped table-sm table-bordered table-hover" id="jobseeker">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Bachelor</th>
                                <th>Masters</th>
                                <th>Club</th>
                                <th>Address</th>
                                <th>Payment</th>
                                <th>TRIX</th>
                                <th>Cell</th>
                                <th>Email</th>
                                <th>Category</th>
                                <th>Experience</th>
                                <th>Skill</th>
                             
                                <th>Resume</th>
                                <th>Date</th>
                                <th>Action</th>
                                <th>Industry</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($jobseekers as $index=>$value)
                            <tr class="odd gradeX">
                            
                                <td>{{$value->id}}</td>
                                <td>{{$value->name}}</td>
                                <td>
                                    <b>Subject: </b> {{$value->bachelor_subject}} | <b>University: </b>{{ $value->bachelor_institute }} |
                                    <b>Result: </b>{{$value->bachelor_result}} | <b>Year/Semester: </b>{{ $value->bachelor_year }} | 
                                    <b>Status: </b>{{ $value->bachelor_status }}
                                    
                                </td>
                                <td>
                                    <b>Subject: </b> {{$value->masters_subject}} | <b>University: </b>{{ $value->masters_institute }} |
                                    <b>Result: </b>{{$value->masters_result}} | <b>Year/Semester: </b>{{ $value->masters_year }} | 
                                    <b>Status: </b>{{ $value->masters_status }}
                                    
                                </td>
                                <td>{{$value->club}}</td>
                                <td>{{$value->address}}</td>
                                <td>
                                <?php 
                                 if($value->payment_status==1){
                                     echo "Paid";
                                 }
                                 else if($value->payment_status==2){
                                     echo "Pending";
                                 }
                                 else {
                                     echo "Unpaid";
                                 }
                                
                                ?>
                                </td>
                                <td>{{$value->trix}}</td>
                                <td>{{$value->cell}}</td>
                                <td>{{$value->email}}</td>
                                <td>{{$value->category}}</td>
                                <td>{{$value->experience}}</td>
                                <td>{{$value->skill}}</td>
                                
                                <td> <a 
                                class="btn btn-sm btn-success"
                                href="/resume/{{$value->resume}}" type="button" target="_blank">Download CV</a>
                                </td> 
                                <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d/m/Y') }}</td>
                                <td>
                                <a
                                 class="btn btn-sm btn-danger"
                                 href="{{ route('approve',$value->id) }}" type="button" >View</a>
                                </td>
                                <td >{{$value->industry}}</td>
                            </tr>
                            @endforeach
                    </tbody>
                  
                    </table>

                    <!--{{ $jobseekers->links() }}-->

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    {{ $jobs->appends(request()->except('page'))->links() }}
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
    $('#jobseeker').DataTable( {
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