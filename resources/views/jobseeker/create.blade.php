@extends('layouts.master')
@section('content')
<style>
    /* CSS for Register page */
.gender-container {
  display: flex;
  gap: 10px;
}
.gender-container button {
  padding: 6px 20px;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
  color:#6e707e;
}
.gender-container .gender1.selected {
  background-color: DodgerBlue;
  border-color: DodgerBlue;
  color: #fff;
}
.gender-container .gender2.selected {
  background-color: #FF647F;
  border-color: #FF647F;
  color: #fff;
}
.gender-container .gender3.selected {
  background-color: SlateBlue;
  border-color: SlateBlue;
  color: #fff;
}
</style>
<div class="container mt-5" style="background: #dfe6e9;">
    <div class="registration-form" style="color: #505155;">
        <h3 class="text-center pt-5 mb-4 text-primary">Job Seeker Registration Form</h3>
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
            <hr>
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
                        <button type="button" class="gender gender1" value="Male"><i class="fa fa-male" aria-hidden="true"></i> Male</button>
                        <button type="button" class="gender gender2" value="Female"><i class="fa fa-female" aria-hidden="true"></i> Female</button>
                        <button type="button" class="gender gender3" value="Other">Other</button>
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
                    <label for="name">Jobseeker Type</label>
                    <input id="jobseeker_type" type="text" class="form-control @error('jobseeker_type') is-invalid @enderror" name="jobseeker_type" required autocomplete="jobseeker_type" readonly>
                    <!--<small> <i>application fee: BDT. <span id="output"></span></i></small><br>-->
                    <p><span class="font-italic small">(This field will take auto input depending on the passing year of the bachelor)</span></p>
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
                        <option value="">Select</option>
                        @foreach ($faculties as $key=>$value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="bachelor_department_id">Department<span class="text-danger"> *</span></label>
                    <select id="bachelor_department_id" type="text" class="form-control @error('bachelor_department_id') is-invalid @enderror" name="bachelor_department_id" required>
                        <option value="" selected></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row mt-4">
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
                    <p class="small" id="errorMessage" style="color: red; display: none;">Incorrect value. Please enter the specific value.</p>
                    <input id="bachelor_year" type="text" class="form-control @error('bachelor_year') is-invalid @enderror" name="bachelor_year" value="{{ old('bachelor_year') }}" autocomplete="bachelor_year" novalidate required>
                </div>
            </div>
            
            <div class="form-group row mb-5">
                <div class="col-md-6">
                    <label id="bachelor_result_label" for="bachelor_result">Enter Result<span class="text-danger"> *</span></label>
                    <input id="bachelor_result" type="text" class="form-control @error('bachelor_result') is-invalid @enderror" name="bachelor_result" value="{{ old('bachelor_result') }}" autocomplete="bachelor_result" novalidate>
                </div>
                <div class="col-md-6">
                    <label for="bachelor_institute">University/Institute<span class="text-danger"> *</span></label>
                    <select id="bachelor_institute" type="text" class="form-control @error('bachelor_institute') is-invalid @enderror" name="bachelor_institute" required autocomplete="bachelor_institute" autofocus>
                        <option value="" selected>Select</option>
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
                        <option value="">Select</option>
                        @foreach ($faculties as $key=>$value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="masters_department_id">Department</label>
                    <select id="masters_department_id" type="text" class="form-control @error('masters_department_id') is-invalid @enderror" name="masters_department_id" autocomplete="masters_department_id" autofocus>
                        <option value="" selected></option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <div class="form-group row mt-4">
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
                    <input id="masters_year" type="text" class="form-control @error('masters_year') is-invalid @enderror" name="masters_year" value="{{ old('masters_year') }}"  autocomplete="bachelor_year" novalidate>
                </div>
            </div>
            <div class="form-group row mb-5">
                <div class="col-md-6">
                    <label id="masters_result_label" for="masters_result">Enter Result</label>
                    <input id="masters_result" type="text" class="form-control @error('masters_result') is-invalid @enderror" name="masters_result" value="{{ old('masters_result') }}" autocomplete="masters_result" novalidate>
                </div>
                <div class="col-md-6">
                    <label for="masters_institute">University/Institute</label>
                    <input id="masters_institute" type="text" class="form-control @error('masters_institute') is-invalid @enderror" name="masters_institute" value="{{ old('masters_institute') }}" autocomplete="bachelor_institute" autofocus>
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
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Technical and Digital Literacy">Technical and Digital Literacy<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Time Management and Organizational Skills">Time Management and Organizational Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Initiative and Self-Motivation">Initiative and Self-Motivation<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Professionalism and Work Ethic">Professionalism and Work Ethic<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Industry-Specific Knowledge">Industry-Specific Knowledge<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="IT Skills">IT Skills<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Web Design">Web Design<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Web Development">Web Development<br>
                        </div>
                        <div class="col-md-6">
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Database Managemen">Database Managemen<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Software Development Lifecycle (SDLC)">Software Development Lifecycle (SDLC)<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Networking and Security">Networking and Security<br>
                            <input type="checkbox" class="form-check-input" name="skill[]" value="Data Analysis and Visualization">Data Analysis and Visualization<br>
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
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="industry">Select Prefered Industry<span class="text-danger"> *</span></label>
                        <select class="js-example-basic-multiple js-states form-control" name="industry[]" multiple="multiple">
                            <option value="Accounting/Finance" >Accounting/Finance</option>
                            <option value="Audit/Tax Services" >Audit/Tax Services</option>
                            <option value="Arts/Design/Fashion" >Arts/Design/Fashion</option>
                            <option value="Admin / HR" >Admin / HR</option>
                            <option value="Architect/Interior Designing" >Architect/Interior Designing</option>
                            <option value="Armed Forces" >Armed Forces</option>
                            <option value="Actuarial/Statistics" >Actuarial/Statistics</option>
                            <option value="Admin/HR/Management" >Admin/HR/Management</option>
                            <option value="Arts & Creative / Graphics /Creative Design" >Arts & Creative / Graphics /Creative Design</option>
                            <option value="Animation Jobs" >Animation Jobs</option>
                            <option value="Aeronautics jobs" >Aeronautics jobs</option>
                            <option value="Agriculture and Fishing jobs" >Agriculture and Fishing jobs</option>
                            <option value="Business jobs" >Business jobs</option>
                            <option value="Blue Collar Jobs" >Blue Collar Jobs</option>
                            <option value="Bank Jobs BPO Jobs" >Bank Jobs BPO Jobs</option>
                            <option value="BPO / Data Entry / Operator" >BPO / Data Entry / Operator</option>
                            <option value="Brewery Jobs" >Brewery Jobs</option>
                            <option value="Biotech jobs,Biotechnology" >Biotech jobs,Biotechnology</option>
                            <option value="Commercial/Supply Chain" >Commercial/Supply Chain</option>
                            <option value="Customer Support/Call Centre /Customer Service" >Customer Support/Call Centre /Customer Service</option>
                            <option value="Clerical/Admin" >Clerical/Admin</option>
                            <option value="Commercial/SupplyChain" >Commercial/SupplyChain</option>
                            <option value="Courier Jobs" >Courier Jobs</option>
                            <option value="Consumer Durables Jobs" >Consumer Durables Jobs</option>
                            <option value="Corporate Planning Jobs" >Corporate Planning Jobs</option>
                            <option value="Design/Creative" >Design/Creative</option>
                            <option value="Doctor/Diagnosis" >Doctor/Diagnosis</option>
                            <option value="Defence Jobs" >Defence Jobs</option>
                            <option value="Engineers / Architect" >Engineers / Architect</option>
                            <option value="Entertainment Jobs" >Entertainment Jobs</option>
                            <option value="Export Import Jobs" >Export Import Jobs</option>
                            <option value="Environmental" >Environmental</option>
                            <option value="Engineering / Diploma" >Engineering / Diploma</option>
                            <option value="Engineer/Architect" >Engineer/Architect</option>
                            <option value="Electrical" >Electrical</option>
                            <option value="Engineering" >Engineering</option>
                            <option value="Environment/Health/Safet" >Environment/Health/Safet</option>
                            <option value="Engineer/Architects" >Engineer/Architects</option>
                            <option value="Engineering Jobs" >Engineering Jobs</option>
                            <option value="Food Tech/Nutritionist" >Food Tech/Nutritionist</option>
                            <option value="Front Desk / Reception" >Front Desk / Reception</option>
                            <option value="Fertilizers Jobs" >Fertilizers Jobs</option>
                            <option value="Food Processing Jobs" >Food Processing Jobs</option>
                            <option value="Food Services jobs" >Food Services jobs</option>
                            <option value="Film Jobs" >Film Jobs</option>
                            <option value="Facility Management Jobs" >Facility Management Jobs</option>
                            <option value="FMCG Jobs" >FMCG Jobs</option>
                            <option value="Finance jobs" >Finance jobs</option>
                            <option value="Graphic Designer Jobs" >Graphic Designer Jobs</option>
                            <option value="General/Cost Acct" >General/Cost Acct</option>
                            <option value="Glass Jobs Air Conditioning Jobs" >Glass Jobs Air Conditioning Jobs</option>
                            <option value="General Work" >General Work</option>
                            <option value="Geology" >Geology</option>
                            <option value="Human Resources jobs" >Human Resources jobs</option>
                            <option value="HR/Org Dev" >HR/Org Dev</option>
                            <option value="IT Management Jobs" >IT Management Jobs</option>
                            <option value="Insurance Jobs" >Insurance Jobs</option>
                            <option value="Journalist/Editors" >Journalist/Editors</option>
                            <option value="Jobs Media Jobs" >Jobs Media Jobs</option>
                            <option value="Logistics jobs" >Logistics jobs</option>
                            <option value="Logistics/Supply Chain" >Logistics/Supply Chain</option>
                            <option value="Marketing/Sales" >Marketing/Sales</option>
                            <option value="Marketing Jobs" >Marketing Jobs</option>
                            <option value="Media Jobs" >Media Jobs</option>
                            <option value="Mining" >Mining</option>
                            <option value="Mechanical/Automotive" >Mechanical/Automotive</option>
                            <option value="Merchandiser Jobs" >Merchandiser Jobs</option>
                            <option value="Management Jobs" >Management Jobs</option>
                            <option value="Network/Sys/DB" >Network/Sys/DB</option>
                            <option value="Nurse/Medical Support" >Nurse/Medical Support</option>
                            <option value="Other Eng" >Other Eng</option>
                            <option value="Purchasing" >Purchasing</option>
                            <option value="Project Management jobs" >Project Management jobs</option>
                            <option value="Paper Jobs" >Paper Jobs</option>
                            <option value="Personal Care" >Personal Care</option>
                            <option value="Packaging Jobs" >Packaging Jobs</option>
                            <option value="Purchase Jobs" >Purchase Jobs</option>
                            <option value="Personal Services jobs" >Personal Services jobs</option>
                            <option value="Quality Assurance jobs" >Quality Assurance jobs</option>
                            <option value="Quality Control" >Quality Control</option>
                            <option value="Quantity Survey" >Quantity Survey</option>
                            <option value="Retail/Merchandise" >Retail/Merchandise</option>
                            <option value="Repair & Maintenance" >Repair & Maintenance</option>
                            <option value="Recruitment Jobs" >Recruitment Jobs</option>
                            <option value="Site Engineering Jobs" >Software Engineering Jobs</option>
                            <option value="Software Development" >Software Development</option>
                            <option value="Sanitary Jobs" >Sanitary Jobs</option>
                            <option value="Secretary/Recept./DataEntry" >Secretary/Recept./DataEntry</option>
                            <option value="Sales-Corporate" >Sales-Corporate</option>
                            <option value="Sales-Retail/General" >Sales-Retail/General</option>
                            <option value="Sales-Eng/Tech/IT" >Sales-Eng/Tech/IT</option>
                            <option value="Sales-Financial Services" >Sales-Financial Services</option>
                            <option value="Sales / Marketing" >Sales / Marketing</option>
                            <option value="Security jobs" >Security jobs</option>
                            <option value="Security/Law Enforcement" >Security/Law Enforcement</option>
                            <option value="Secretarial" >Secretarial</option>
                            <option value="Semiconductor/Wafer" >Semiconductor/Wafer</option>
                            <option value="Telesales/Telemarketing" >Telesales/Telemarketing</option>
                            <option value="Top Management" >Top Management</option>
                            <option value="Tech & Helpdesk Support" >Tech & Helpdesk Support</option>
                            <option value="Teacher" >Teacher</option>
                            <option value="Travel Jobs" >Travel Jobs</option>
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
            <!--<h5 class="text-center mt-4" style="color: DodgerBlue;">Your Registration Fee BDT. <span id="test_payment"></span></h5>-->
            <p class="text-center mt-4" style="color: DodgerBlue;">Registration Fee: Tk 200/participant (for Food Coupon)</p>
            <h5 class="text-center" style="color: #FF647F">Make bKash Payment To 01811458885</h5>
            <div class="form-group row mb-5">
                <label for="trix" class="col-md-3 col-form-label text-md-right">{{ __('Enter bKash Transaction ID') }}<span class="text-danger"> *</span></label>
                <div class="col-md-6">
                    <input id="trix" type="text" class="form-control" name="trix" required autocomplete="trix">
                </div>
            </div>
            <hr>
            <p class="text-center text-danger font-italic">Please make sure you have filled all the fields correctly before submitting</p>
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
