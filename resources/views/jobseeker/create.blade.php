
@extends('layouts.master')

@section('content')
<div class="container mt-5" style="background: #dfe6e9;">
    <div class="registration-form" style="color: #505155;">
        <h3 class="text-center pt-5 mb-5 text-primary">Job Seeker Registration Form</h3>
        
        @if(session()->get('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div><br/>
        @endif
        @if($errors->any())
        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
        @endif
        
        <form method="POST" action="{{ route('jobseeker.store') }}" enctype="multipart/form-data">
            @csrf
            <h5 class="text-primary">Personal Information</h5>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="name">Name<span class="text-danger"> *</span></label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your Name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="gender">Gender Information<span class="text-danger"> *</span></label>
                    <div class="gender-container">
                        <button type="button" class="gender" value="Male"><i class="fa fa-male" aria-hidden="true"></i> Male</button>
                        <button type="button" class="gender" value="Female"><i class="fa fa-female" aria-hidden="true"></i> Female</button>
                        <button type="button" class="gender" value="Other">Other</button>
                    </div>
                    <input type="hidden" name="gender" id="gender-input">
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="name">Years of Experience<span class="text-danger"> *</span></label>
                    <input id="experience" type="text" class="form-control @error('experience') is-invalid @enderror" name="experience" value="{{ old('experience') }}" required autocomplete="experience" placeholder="Your Experience" autofocus>
                    @error('experience')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="name">Mobile Number<span class="text-danger"> *</span></label>
                    <input id="cell" type="tel" class="form-control @error('cell') is-invalid @enderror" name="cell" value="{{ old('cell') }}" required autocomplete="cell" placeholder="Your Phone Number" autofocus>
                    @error('cell')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="name">Email<span class="text-danger"> *</span></label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Email Address" autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="name">Address<span class="text-danger"> *</span></label>
                    <input id="address" type="text" class="form-control" name="address" required autocomplete="address" placeholder="Your Address">
                    @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-4">
                    <label for="password">Password<span class="text-danger"> *</span></label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required placeholder="Password" autocomplete="password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="password">Password Confirmation<span class="text-danger"> *</span></label>
                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" value="{{ old('password_confirmation') }}" required placeholder="Retype Password" autocomplete="password_confirmation">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="name">Jobseeker Type<span class="text-danger"> *</span></label>
                    <select id="certificate" type="text" onclick="amount()" class="form-control @error('jobseeker_type') is-invalid @enderror" name="jobseeker_type" required autocomplete="jobseeker_type" autofocus>
                        <option value="" selected>Select</option>
                        <option id = "student"value="Student">Student</option>
                        <option id ="alumni" value="Alumni">Alumni</option>
                    </select>
                    <small> <i>application fee: BDT. <span id="output"></span></i></small><br>
                    @error('jobseeker_type')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <hr>
            <!-- Bachelor Section -->
            <h5 class="mt-4 text-primary">Bachelor's Degree Information</h5>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="bachelor_faculty_id">Faculty Name<span class="text-danger"> *</span></label>
                    <select id="bachelor_faculty_id" type="text" class="form-control @error('bachelor_faculty_id') is-invalid @enderror" name="bachelor_faculty_id" required autocomplete="bachelor_faculty_id" autofocus>
                        <option value="">Select Bachelor Faculty</option>
                        @foreach ($faculties as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="bachelor_department_id">Department<span class="text-danger"> *</span></label>
                    <select id="bachelor_department_id" type="text" class="form-control @error('bachelor_department_id') is-invalid @enderror" name="bachelor_department_id" required>
                        <option value="" selected>Bachelor Department</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row mt-1">
                        <label for="bachelor_status" class="col-md-4 col-form-label">Currently Studying ?<span class="text-danger"> *</span></label>
                        <div class="col-md-6">
                            <div class="checkbox mt-2">
                                <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="yes">&nbsp;&nbsp;Yes</label>
                                <label class="checkbox-inline"><input id="bachelor_status" type="radio" name="bachelor_status" value="no" checked>&nbsp;&nbsp;No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label id="bachelor_year_label" for="bachelor_year">Passing Year<span class="text-danger"> *</span></label>
                    <input id="bachelor_year" type="text" class="form-control @error('bachelor_year') is-invalid @enderror" name="bachelor_year" value="{{ old('bachelor_year') }}" placeholder="Bachelor Passing Year"  autocomplete="bachelor_year" novalidate>
                </div>
            </div>
            <div class="form-group row mb-5">
                <div class="col-md-6">
                    <label id="bachelor_result_label" for="bachelor_result">Enter Result<span class="text-danger"> *</span></label>
                    <input id="bachelor_result" type="text" class="form-control @error('bachelor_result') is-invalid @enderror" name="bachelor_result" value="{{ old('bachelor_result') }}" placeholder="Bachelor Result" autocomplete="bachelor_result" novalidate>
                </div>
                <div class="col-md-6">
                    <label for="bachelor_institute">University/Institute<span class="text-danger"> *</span></label>
                    <select id="bachelor_institute" type="text" class="form-control @error('bachelor_institute') is-invalid @enderror" name="bachelor_institute" required autocomplete="bachelor_institute" autofocus>
                        <option value="" selected>Select Bachelor Institute</option>
                        <option id = "diu"value="Daffodil International University">Daffodil International University</option>
                        <option id ="diit" value="Daffodil Institute of IT">Daffodil Institute of IT</option>
                    </select>
                </div>
            </div>
            <hr>
            <!-- Masters Section -->
            <h5 class="mt-4 text-primary">Master's Degree Information (If Any)</h5>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="masters_faculty_id">Faculty Name</label>
                    <select id="masters_faculty_id" type="text" class="form-control @error('masters_faculty_id') is-invalid @enderror" name="masters_faculty_id" autocomplete="masters_faculty_id" autofocus>
                        <option value="">Select Master's Faculty</option>
                        @foreach ($faculties as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="masters_department_id">Department</label>
                    <select id="masters_department_id" type="text" class="form-control @error('masters_department_id') is-invalid @enderror" name="masters_department_id" autocomplete="masters_department_id" autofocus>
                        <option value="" selected>Master's Department</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row mt-1">
                        <label for="masters_status" class="col-md-4 col-form-label">Currently Studying ?</label>
                        <div class="col-md-6">
                            <div class="checkbox mt-2">
                                <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="yes">&nbsp;&nbsp;Yes</label>
                                <label class="checkbox-inline"><input type="radio" id="masters_status" name="masters_status" value="no" checked>&nbsp;&nbsp;No</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label  id="masters_year_label" for="masters_year">Passing Year</label>
                    <input id="masters_year" type="text" class="form-control @error('masters_year') is-invalid @enderror" name="masters_year" value="{{ old('masters_year') }}" placeholder="Master's Passing Year"  autocomplete="bachelor_year" novalidate>
                </div>
            </div>
            <div class="form-group row mb-5">
                <div class="col-md-6">
                    <label id="masters_result_label" for="masters_result">Enter Result</label>
                    <input id="masters_result" type="text" class="form-control @error('masters_result') is-invalid @enderror" name="masters_result" value="{{ old('masters_result') }}" placeholder="Master's Result" autocomplete="masters_result" novalidate>
                </div>
                <div class="col-md-6">
                    <label for="masters_institute">University/Institute</label>
                    <input id="masters_institute" type="text" class="form-control @error('masters_institute') is-invalid @enderror" name="masters_institute" value="{{ old('masters_institute') }}" placeholder="Master's Institute" autocomplete="bachelor_institute" autofocus>
                </div>
            </div>
            <hr>
            <!--  General field-->
            <h5 class="mt-4 text-primary">Others Necessary Information</h5>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="skill">What Skills Do you have?<span class="text-danger"> *</span></label>
                    <div class="form-group row" style="padding-left: 20px;">
                        <div class="col-md-6">
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Communication Skills">Communication Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Problem-Solving and Critical Thinking">Problem-Solving and Critical Thinking<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Teamwork and Collaboration">Teamwork and Collaboration<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Adaptability and Flexibility">Adaptability and Flexibility<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Technical and Digital Literacy">Technical and Digital Literacy<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Time Management and Organizational Skills">Time Management and Organizational Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Analytical Skills">Analytical Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Initiative and Self-Motivation">Initiative and Self-Motivation<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Professionalism and Work Ethic">Professionalism and Work Ethic<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Positive attitude">Positive attitude<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Industry-Specific Knowledge">Industry-Specific Knowledge<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="IT Skills">IT Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Web Design">Web Design<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Web Development">Web Development<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Database Managemen">Database Managemen<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Software Development Lifecycle (SDLC)">Software Development Lifecycle (SDLC)<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Networking and Security">Networking and Security<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Data Analysis and Visualization">Data Analysis and Visualization<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Cloud Computing">Cloud Computing<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Cybe Security ">Cybe Security <br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Soft Skills">Soft Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Graphic Design">Graphic Design<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Social Media Optimization">Social Media Optimization<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Report Writing">Report Writing<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Content Development">Content Development<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Accounting">Accounting<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Online Surveying">Online Surveying <br>
                        </div>
                        <div class="col-md-10">
                            <input type="checkbox" class="form-check-input">Others <input type="text" class="form-control" name="skill[]">
                            <small> <i>Enter skills as comma ( , ) separated</i></small>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="industry">Select Prefered Industry<span class="text-danger"> *</span></label>
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
                    <div class="form-group">
                        <label for="resume" >Submit Resume<span class="text-danger"> *</span></label>
                        <input id="resume" type="file" class="form-control" name="resume" required autocomplete="resume">
                        <small> <i>Must be in PDF format</i></small>
                    </div>
                    <div class="form-group mb-5">
                        <label for="video">Enter video resume link</label>
                        <input id="video" type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" autocomplete="video" autofocus>
                        <small> <i> Example: https://youtube.com/ABCD or https://drive.google.com/ABCD</i></small>
                    </div>
                </div>
            </div>
            <hr>
            <h5 class="text-center mt-5" style="color: #FF647F">Make bKash Payment BDT. <span class="text-danger" id="test_payment"></span> To 01811458885</h5>
            <div class="form-group row mb-5">
                <label for="trix" class="col-md-3 col-form-label text-md-right">{{ __('Enter bKash Transaction ID') }}<span class="text-danger"> *</span></label>
                <div class="col-md-6">
                    <input id="trix" type="text" class="form-control" name="trix" required autocomplete="trix">
                </div>
            </div>
            <hr>
            <div class="form-group row">
                <div class="col-md-6 offset-md-3 mb-3">
                    <button type="submit" class="btn btn-primary btn-block">
                        {{ __('Submit') }}
                    </button>
                </div>
            </div>
        </form>
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
<script>
    const genderButtons = document.querySelectorAll('.gender');
    const genderInput = document.getElementById('gender-input');
    
    function handleGenderSelection() {
        const selectedGender = this.value;
        genderInput.value = selectedGender;
        
        genderButtons.forEach(button => {
            button.classList.remove('selected');
        });
        
        this.classList.add('selected');
    }
    
    genderButtons.forEach(button => {
        button.addEventListener('click', handleGenderSelection);
    });
</script>

@endsection
