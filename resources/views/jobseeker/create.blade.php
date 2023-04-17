@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header text-center">
                    <p ><b>Job Seeker Registration Form<b>&nbsp;
                    <a class="btn btn-primary btn-sm " href="/login" >Login</a><br>
                    </p>
                
                    <!-- <b class="text-danger">"Before applying a job, Please register and complete your profile on Futurenation Platform. Use the same email in both places" &nbsp;</b>
                    <a class="text-success" style="font-weight: normal;" href="https://platform.futurenation.gov.bd"><em>https://platform.futurenation.gov.bd</em></a> -->
                </div>
                

                <div class="card-body">
                <!-- <h4>By openning a new acocunt here you can access <a href="https://skill.jobs">skill.jobs</a>
                and <a href="https://resume.skill.jobs">resume.skill.jobs</a> using the same account's email and password.

                </h4> -->
                <h4>
                Personal Information</h4>

                @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}
                        </div><br />
                    @endif

                    @if($errors->any())
                      {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif
                    <form method="POST" action="{{ route('jobseeker.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last" class="col-md-4 col-form-label text-md-right">{{ __('Last Academic Qualificaiton') }}</label>

                            <div class="col-md-6">
                                <input id="last" type="text" class="form-control @error('last') is-invalid @enderror" name="last" value="{{ old('last') }}" required autocomplete="name" autofocus>

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
                                <input id="address" type="text" class="form-control" name="address" required autocomplete="address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('City/State') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" required autocomplete="city">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Cell Phone') }}</label>

                            <div class="col-md-6">
                                <input id="cell" type="tel" class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ old('cell') }}" required autocomplete="cell" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password Confirmation') }}</label>

                            <div class="col-md-6">
                                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password_confirmation">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        

                        <div class="form-group row">
                            <label for="number" class="col-md-4 col-form-label text-md-right">{{ __('Number of Years of Experience') }}</label>

                            <div class="col-md-6">
                                <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="certificate" class="col-md-4 col-form-label text-md-right">{{ __('Jobseeker Type') }}</label>

                            <div class="col-md-6">

                                <select id="certificate" type="text" onclick="amount()" class="form-control @error('certificate') is-invalid @enderror" name="certificate" required autocomplete="certificate" autofocus>
                                <option value="" selected>---</option>
                                <option id = "student"value="Student">Student</option>
                                <option id ="alumni" value="Alumni">Alumni</option>
                                </select>
                                <small> <i>application fee: BDT. <span id="output"></span></i></small><br>

                            </div>
                        </div>

                        <hr>
                        <div class="alert alert-primary">
                            <h4>Bachelor's Degree Information</h4>

                            <div class="form-group row">
                                <label for="bachelor_faculty_id" class="col-md-4 col-form-label text-md-right">Faculty Name</label>
                                <div class="col-md-6">
                                    <select id="bachelor_faculty_id" type="text" class="form-control @error('bachelor_faculty_id') is-invalid @enderror" name="bachelor_faculty_id" required autocomplete="bachelor_faculty_id" autofocus>
                                    <option value="">--- Select Faculty ---</option>
                                    @foreach ($faculties as $key=>$value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                    </select>
                                </div> 
                            </div>

                            <div class="form-group row">
                                <label for="bachelor_department_id" class="col-md-4 col-form-label text-md-right">Department</label>
                                <div class="col-md-6">
                                    <select id="bachelor_department_id" type="text" class="form-control @error('bachelor_department_id') is-invalid @enderror" name="bachelor_department_id" required>
                                    <option value="" selected>------</option>
                               
                                    </select>
                                </div> 
                            </div>


                            <div class="bachelor_result form-group row">
                                <label id="bachelor_year_label" for="bachelor_year" class="col-md-4 col-form-label text-md-right">Passing Year</label>

                                <div class="col-md-6">
                                    <input id="bachelor_year" type="text" class="form-control @error('bachelor_year') is-invalid @enderror" name="bachelor_year" value="{{ old('bachelor_year') }}"  autocomplete="bachelor_year" novalidate>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="bachelor_status" class="col-md-4 col-form-label text-md-right">Currently Studying ?</label>

                                <div class="col-md-6">
                                    <div class="checkbox">
                                    <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="yes">&nbsp;&nbsp;Yes</label>
                                    <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="no" checked>&nbsp;&nbsp;No</label>
                                    </div>

                                </div>
                            </div>
                            <div class=" form-group row">
                                <label id="bachelor_result_label" for="bachelor_result" class="col-md-4 col-form-label text-md-right">Enter Result</label>

                                <div class="col-md-6">
                                    <input id="bachelor_result" type="text" class="form-control @error('bachelor_result') is-invalid @enderror" name="bachelor_result" value="{{ old('bachelor_result') }}"  autocomplete="bachelor_result" novalidate>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="bachelor_institute" class="col-md-4 col-form-label text-md-right">University/Institute</label>

                                <div class="col-md-6">

                                    <select id="bachelor_institute" type="text" class="form-control @error('bachelor_institute') is-invalid @enderror" name="bachelor_institute" required autocomplete="bachelor_institute" autofocus>
                                        <option value="" selected>-----</option>
                                        <option id = "diu"value="Daffodil International University">Daffodil International University</option>
                                        <option id ="diit" value="Daffodil Institute of IT">Daffodil Institute of IT</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <div class="alert alert-success">
                            <h4>Master's Degree Information (If Any)</h4>
                            <div class="form-group row">
                                <label for="masters_faculty_id" class="col-md-4 col-form-label text-md-right">Faculty Name</label>
                                <div class="col-md-6">

                                    <select id="masters_faculty_id" type="text" class="form-control @error('masters_faculty_id') is-invalid @enderror" name="masters_faculty_id" autocomplete="masters_faculty_id" autofocus>
                                    <option value="">--- Select Faculty ---</option>
                                    @foreach ($faculties as $key=>$value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach
                                    </select>
                                </div> 
                            </div>
                            <div class="form-group row">
                                <label for="masters_department_id" class="col-md-4 col-form-label text-md-right">Department</label>

                                <div class="col-md-6">

                                    <select id="masters_department_id" type="text" class="form-control @error('masters_department_id') is-invalid @enderror" name="masters_department_id" autocomplete="masters_department_id" autofocus>
                                    <option value="" selected>------</option>
                                    </select>
                                </div> 
                            </div>


                            <div class="masters_result form-group row">
                                <label  id="masters_year_label" for="masters_year" class="col-md-4 col-form-label text-md-right">Passing Year</label>

                                <div class="col-md-6">
                                    <input id="masters_year" type="text" class="form-control @error('masters_year') is-invalid @enderror" name="masters_year" value="{{ old('masters_year') }}"  autocomplete="bachelor_year" novalidate>

                                </div>
                            </div>



                            <div class="form-group row">
                                <label for="masters_status" class="col-md-4 col-form-label text-md-right">Currently Studying ?</label>

                                <div class="col-md-6">
                                    <div class="checkbox">

                                    <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="yes">&nbsp;&nbsp;Yes</label>
                                    <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="no" checked>&nbsp;&nbsp;No</label>
                                    </div>

                                </div>
                            </div>
                            <div class=" form-group row">
                                <label id="masters_result_label" for="masters_result" class="col-md-4 col-form-label text-md-right">Enter Result</label>

                                <div class="col-md-6">
                                    <input id="masters_result" type="text" class="form-control @error('masters_result') is-invalid @enderror" name="masters_result" value="{{ old('masters_result') }}"  autocomplete="masters_result" novalidate>

                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="masters_institute" class="col-md-4 col-form-label text-md-right">University/Institute</label>

                                <div class="col-md-6">
                                    <input id="masters_institute" type="text" class="form-control @error('masters_institute') is-invalid @enderror" name="masters_institute" value="{{ old('masters_institute') }}"  autocomplete="bachelor_institute" autofocus>

                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                                <label for="industry" class="col-md-4 col-form-label text-md-right">Select Prefered Industry</label>

                                <div class="col-md-8">
                            <select class="js-example-basic-multiple js-states form-control" name="industry[]" multiple="multiple">


                            <option value="Accounting/Finance/Banking" >Accounting/Finance/Banking</option>
                            <option value="Administration/HR/Legal">Administration/HR/Legal</option>
                            <option value="Advertising/Marketing/PR" >Advertising/Marketing/PR</option>
                            <option value="Arts & Design" >Arts &amp; Design</option>
                            <option value="Automotive" >Automotive</option>
                            <option value="Aviation/Airlines" >Aviation/Airlines</option>
                            <option value="Call Centre/BPO" >Call Centre/BPO</option>
                            <option value="Construction/Architecture" >Construction/Architecture</option>
                            <option value="Consulting Services" >Consulting Services</option>
                            <option value="Courier/Distribution/Logistics" >Courier/Distribution/Logistics</option>
                            <option value="CustomerSupport/Telemarketing" >CustomerSupport/Telemarketing</option>
                            <option value="Digital Marketing" >Digital Marketing</option>
                            <option value="Education/Training" >Education/Training</option>
                            <option value="Engineering/Manufacturing" >Engineering/Manufacturing</option>
                            <option value="Entertainment/Media" >Entertainment/Media</option>
                            <option value="Environmental" >Environmental</option>
                            <option value="Export/Import" >Export/Import</option>
                            <option value="Fashion/Garments" >Fashion/Garments</option>
                            <option value="Food Industry" >Food Industry</option>
                            <option value="Government Services" >Government Services</option>
                            <option value="HealthCare/Pharma" >HealthCare/Pharma</option>
                            <option value="Hospitality/Travel/Tourism" >Hospitality/Travel/Tourism</option>
                            <option value="Insurance" >Insurance</option>
                            <option value="Internet/E-Commerc" >Internet/E-Commerce</option>
                            <option value="IT/Hardware" >IT/Hardware</option>
                            <option value="IT/Software" >IT/Software</option>
                            <option value="Legal/Company Secretarial" >Legal/Company Secretarial</option>
                            <option value="Maintenance/Repair" >Maintenance/Repair</option>
                            <option value="Media/Publishing" >Media/Publishing</option>
                            <option value="oil,gas &amp; power" >oil,gas &amp; power</option>
                            <option value="Oil/Gas/Utilities" >Oil/Gas/Utilities</option>
                            <option value="Others" >Others</option>
                            <option value="Production/Operations" >Production/Operations</option>
                            <option value="Purchase/ Supply Chain" >Purchase/ Supply Chain</option>
                            <option value="Recruitment/HR" >Recruitment/HR</option>
                            <option value="Retail/Wholesale" >Retail/Wholesale</option>
                            <option value="Sales/Business Development" >Sales/Business Development</option>
                            <option value="Science/Research/Development" >Science/Research/Development</option>
                            <option value="Software Development" >Software Development</option>
                            <option value="Sports and Recreation" >Sports and Recreation</option>
                            <option value="Supply Chain/Logistics" >Supply Chain/Logistics</option>
                            <option value="Telecom/ ISP" >Telecom/ ISP</option>
                            <option value="Transportation/Warehousing" >Transportation/Warehousing</option>
                            <option value="Travel/ Airlines" >Travel/ Airlines</option>
                        </select>

                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('What Skills Do you have?') }}</label>

                            <div class="col-md-3">


                                <input type="checkbox" class="form-check-input" name="skill[]" value="MS Office">MS Office<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Photoshop">Adobe Photoshop<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Illustrator">Adobe Illustrator<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="SEO">SEO<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Social Media Optimization">Social Media Optimization<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Website Development">Website Development<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Web Programing">Web Programing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Report Writing">Report Writing<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Data Entry (English/Bangla)">Data Entry (English/Bangla)<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Translator (English to Bangla or Bangla to English">Translator (English to Bangla or Bangla to English<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Adobe Premier for Video Editing">Adobe Premier for Video Editing<br>

                              </div>
                              <div class="col-md-3">
                              <input type="checkbox" class="form-check-input" name="skill[]" value="Content Development">Content Development<br>

                                <input type="checkbox" class="form-check-input" name="skill[]" value="Accounting">Accounting<br>
                                <input type="checkbox" class="form-check-input" name="skill[]" value="Online Surveying">Online Surveying <br>
                                <input type="checkbox" class="form-check-input">Others <input type="text" class="form-control" name="skill[]"><br>
                                <small> <i>Enter skills as comma separated</i></small>
                              </div>


                        </div>
                        <div class="form-group row">
                            <label for="resume" class="col-md-4 col-form-label text-md-right">{{ __('Submit Resume') }}</label>

                            <div class="col-md-6">
                                <input id="resume" type="file" class="form-control" name="resume" required autocomplete="resume">
                                <small> <i>Must be in PDF format</i></small>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="video" class="col-md-4 col-form-label text-md-right">{{ __('Enter video resume link') }}</label>

                            <div class="col-md-6">
                                <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" autocomplete="video" autofocus>
                                <small> <i> Example: https://youtube.com/ABCD or https://drive.google.com/ABCD</i></small>
                            </div>
                        </div>

                        <hr>
                        <h4><b>Make bKash Payment BDT. <span class="text-danger" id="test_payment"></span> To 01811458885</b></h4>
                        <div class="form-group row">
                           <label for="trix" class="col-md-4 col-form-label text-md-right">{{ __('Enter bKash Transaction ID') }}</label>

                            <div class="col-md-6">
                                <input id="trix" type="text" class="form-control" name="trix" required autocomplete="trix">
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
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
