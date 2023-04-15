@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Hello <b>{{ $data->name }}!</b> Here you can update your profile.</div>

                <div class="card-body">
                 



                    @if(session()->get('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div><br />
                    @endif

                    @if($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif
                    <form method="POST" action="{{ route('jobseeker.update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $data->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- <div class="form-group row">
                            <label for="university" class="col-md-4 col-form-label text-md-right">{{ __('University') }}</label>

                            <div class="col-md-6">
                                <input id="university" type="text" class="form-control @error('university') is-invalid @enderror" name="university" value="{{ $data->university }}" required autocomplete="name" autofocus>

                                @error('university')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->
                        <!-- <div class="form-group row">
                            <label for="major" class="col-md-4 col-form-label text-md-right">{{ __('Major') }}</label>

                            <div class="col-md-6">
                                <input id="major" type="text" class="form-control @error('major') is-invalid @enderror" name="major" value="{{ $data->major }}" required autocomplete="name" autofocus>

                                @error('major')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="last" class="col-md-4 col-form-label text-md-right">{{ __('Last Academic Qualificaiton') }}</label>

                            <div class="col-md-6">
                                <input id="last" type="text" class="form-control @error('last') is-invalid @enderror" name="last" value="{{ $data->last }}" required autocomplete="name" autofocus>

                                @error('last')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address" value="{{ $data->address }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('City/State/Zip') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required autocomplete="city" value="{{ $data->city }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cell Phone') }}</label>

                            <div class="col-md-6">
                                <input id="cell" type="number" class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ $data->cell }}" required autocomplete="cell" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Number of Years of Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ $data->experience }}" required autocomplete="experience" autofocus>

                            </div>
                        </div>



                        <div class="form-group row">


                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('What Skills Do you have?') }}</label>


                            <div class="col-md-6">


                                <textarea class="form-control" rows="5" id="skill" name="skill">{{ $data->skill }}</textarea>
                                <small> <i>Enter skills as comma separated</i></small>

                            </div>

                        </div>
                     

                    
                       
                        <div class="form-group row">
                     
                            <label for="resume" class="col-md-4 col-form-label text-md-right">{{ __('Submit Resume') }}</label>

                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume"  autocomplete="resume">
                            </div>


                        </div>
                        
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                Current Resume:
                                <a href="/resume/{{ $data->resume }}" type="button">View</a>
                            </div>
                            <br>

                        </div>

                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Enter video resume link') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ $data->video }}" autocomplete="video" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="industry" class="col-md-4 col-form-label text-md-right">Select Prefered Industry</label>

                            <div class="col-md-6">
                                <select class="js-example-basic-multiple " name="industry[]" multiple="multiple">

                                @foreach($industries as $industry)
                                   
                                    <option value="{{ $industry }}"
                                    <?php if(in_array($industry,$selected)) {echo "selected";}?>
                                    >{{ $industry }}</option>
                                 
                                @endforeach
                                </select>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="certificate" class="col-md-4 col-form-label text-md-right">{{ __('Jobseeker Type') }}</label>

                            <div class="col-md-6">

                                <select id="certificate" type="text" onclick="amount()" class="form-control @error('certificate') is-invalid @enderror" name="certificate" required autocomplete="certificate" autofocus>
                                <option value="{{ $data->certificate }}">{{ $data->certificate ?? ' '}}</option>
                                <option id = "student"value="Student">Student</option>
                                <option id ="alumni" value="Alumni">Alumni</option>
                                </select>
                                <!--<small> <i>application fee: BDT. <span id="output"></span></i></small><br>-->

                            </div>
                        </div>
                        <div class="alert alert-primary">
                            <h4>Bachelor's Degree Information</h4>

                            <div class="form-group row">
                                <label for="bachelor_faculty_id" class="col-md-4 col-form-label text-md-right">Faculty</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="bachelor_faculty_id">
                                        <option value="{{$data->bachelor_faculty_id}}">{{$data->bachelor_faculty->faculty_name ?? ' '}}</option>
                                        @foreach ($faculties as $key=>$value)
                                            <option value="{{$value->id}}">{{$value->faculty_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="bachelor_subject" class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="bachelor_department_id">
                                        <option value="{{$data->bachelor_department_id}}">{{$data->bachelor_department->department_name ?? ' '}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                        

                            <div class="bachelor_result form-group row">
                                <label id="bachelor_year_label" for="bachelor_year" class="col-md-4 col-form-label text-md-right">Passing Year</label>

                                <div class="col-md-6">
                                    <input id="bachelor_year" type="text" class="form-control @error('bachelor_year') is-invalid @enderror" name="bachelor_year" 
                                    value="{{ $data->bachelor_year }}"  autocomplete="bachelor_year" novalidate>

                                </div>
                            </div>

      

                            <div class="form-group row">
                                <label for="bachelor_status" class="col-md-4 col-form-label text-md-right">Currently Studying ?</label>

                                <div class="col-md-6">
                                    <div class="checkbox">
                                    <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="yes"
                                    <?php if($data->bachelor_status=="Ongoing") { echo "checked"; } ?>
                                    >&nbsp;&nbsp;Yes</label>
                                    <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="no" 
                                    <?php if($data->bachelor_status=="") { echo "checked"; } ?>
                                    >&nbsp;&nbsp;No</label>
                                    </div>
                        
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label id="bachelor_result_label" for="bachelor_result" class="col-md-4 col-form-label text-md-right">Enter Result</label>

                                <div class="col-md-6">
                                    <input id="bachelor_result" type="text" class="form-control @error('bachelor_result') is-invalid @enderror" name="bachelor_result" 
                                    value="{{ $data->bachelor_result }}"  autocomplete="bachelor_result" novalidate>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="bachelor_institute" class="col-md-4 col-form-label text-md-right">University/Institute</label>

                                <div class="col-md-6">
                                    
                                    <select id="bachelor_institute" type="text" class="form-control @error('bachelor_institute') is-invalid @enderror" name="bachelor_institute" required autocomplete="bachelor_institute" autofocus>
                                        <option value="{{ $data->bachelor_institute }}">{{ $data->bachelor_institute ?? ' '}}</option>
                                        <option id = "diu"value="Daffodil International University">Daffodil International University</option>
                                        <option id ="diit" value="Daffodil Institute of IT">Daffodil Institute of IT</option>
                                    </select>

                                </div>
                            </div>
                        </div>
                        <div class="alert alert-success">
                            <h4>Master's Degree Information (If Any)</h4>
                            <div class="form-group row">
                                <label for="masters_subject" class="col-md-4 col-form-label text-md-right">Faculty</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="masters_faculty_id">
                                        <option value="{{$data->masters_faculty_id}}">{{$data->masters_faculty->faculty_name ?? ' '}}</option>
                                        @foreach ($faculties as $key=>$value)
                                        <option value="{{$value->id}}">{{$value->faculty_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="masters_subject" class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">
                                    <select class="form-control" name="masters_department_id">
                                        <option value="{{$data->masters_department_id}}">{{$data->masters_department->department_name ?? ' '}}</option>
                                        
                                    </select>
                                </div>
                            </div>
                        

                            <div class="masters_result form-group row">
                                <label  id="masters_year_label" for="masters_year" class="col-md-4 col-form-label text-md-right">
                                <?php if($data->bachelor_status=="Ongoing") { echo "Enter Semester/Year. Ex: 1st Semester/1st Year
                                    "; } else {
                                        echo "Enter Passing Year
                                        ";
                                    } ?>
                               
                            
                            </label>

                                <div class="col-md-6">
                                    <input id="masters_year" type="text" class="form-control @error('masters_year') is-invalid @enderror" name="masters_year" 
                                    value="{{ $data->masters_year  }}"  autocomplete="bachelor_year" novalidate>

                                </div>
                            </div>

               

                            <div class="form-group row">
                                <label for="masters_status" class="col-md-4 col-form-label text-md-right">Currently Studying ?</label>

                                <div class="col-md-6">
                                    <div class="checkbox">

                                    <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="yes"
                                    <?php if($data->masters_status=="Ongoing") { echo "checked"; } ?>
                                    >&nbsp;&nbsp;Yes</label>
                                    <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="no" 
                                    <?php if($data->masters_status=="") { echo "checked"; } ?>
                                    >&nbsp;&nbsp;No</label>
                                    </div>
                        
                                </div>
                            </div>
                            <div class=" form-group row">
                                <label id="masters_result_label" for="masters_result" class="col-md-4 col-form-label text-md-right">

                                <?php if($data->bachelor_status=="Ongoing") { echo "Enter Result Till Now
"; } else {
    echo "Enter Result
    ";
} ?>
                                </label>

                                <div class="col-md-6">
                                    <input id="masters_result" type="text" class="form-control @error('masters_result') is-invalid @enderror" name="masters_result" 
                                    value="{{ $data->masters_result  }}"  autocomplete="masters_result" novalidate>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="masters_institute" class="col-md-4 col-form-label text-md-right">University/Institute</label>

                                <div class="col-md-6">
                                    <input id="masters_institute" type="text" class="form-control @error('masters_institute') is-invalid @enderror" name="masters_institute" 
                                    value="{{ $data->masters_institute  }}"  autocomplete="bachelor_institute" autofocus>

                                </div>
                            </div>
                        </div>
                       
                        <div class="form-group row ">
                        <div class="col-md-4"></div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                        


                        <!-- <hr>
                        <h4><b>Make bKash Payment BDT. 200 To 01991195544</b></h4>
                        <div class="form-group row">
                            <label for="trix" class="col-md-4 col-form-label text-md-right">{{ __('Enter bKash Transaction ID') }}</label>

                            <div class="col-md-6">
                                <input id="trix" type="text" class="form-control" name="trix" required autocomplete="trix">
                            </div>
                        </div> -->


                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('select[name="bachelor_faculty_id"]').on('change', function() {
            var facultyID = $(this).val();
            if(facultyID) {
                $.ajax({
                    url: '/myform/ajax/'+facultyID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="bachelor_department_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="bachelor_department_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="bachelor_department_id"]').empty();
            }
        });
    });
</script>
<script>
$(document).ready(function() {
        $('select[name="masters_faculty_id"]').on('change', function() {
            var mfacultyID = $(this).val();
            if(mfacultyID) {
                $.ajax({
                    url: '/mastersmyform/ajax/'+mfacultyID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="masters_department_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="masters_department_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="masters_department_id"]').empty();
            }
        });
    });
</script>
@endsection