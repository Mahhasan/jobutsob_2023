@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Job Utshob  2022 Services </div>
                <p class="m-3">Resume Screening & Job Readiness Training Fee: 100 BDT for Students and 300 BDT for Alumni</p>
                

                <div class="card-body">
                    <u><h4>For all participants:</h4></u>
                    <ul>
                        <li>Job Application</li>
                        <li>Job placement opportunity</li>
                        <li>On Campus Interview</li>
                        <li>Resume & Online portfolio Development</li>
                        <li>Access in 24 Special Grooming Session </li>
                        <li>Access in 3 Master Class</li>
                        <li>Job Readiness Training</li>
                        <li>Skill Assessment Test</li>
                        <li>Participation E-Certificate</li>
                    </ul>

                    @if(session()->get('success'))
                        <div class="alert alert-success">
                        {{ session()->get('success') }}  
                        </div><br />
                    @endif

                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                    @endif

                   
                    @if(!$jobseeker->trix)
                   <!--<h4 style="color:red;">Pay BDT. 100 as Students and 300 BDT as Alumni to avail Job Utsob Services.<br> -->
                   <!-- Select payment option & pay to 01811458885 -->

                   <!-- <img src="{{asset('image/payment.jpg') }}" width="80%" alt="">-->
                   <!-- </h4>-->
                
                
                   <!-- <form method="post" action="{{ route('servicepay')}}">-->
                   <!-- @CSRF-->
                   <!--     <div class="form-group">-->
                   <!--         <label for="trix">bKash transaction ID</label>-->
                   <!--         <input type="text" class="form-control" id="trix" aria-describedby="trix" placeholder="Enter bKash transanction ID" name="trix">-->
                   <!--         <small id="trix" class="form-text text-muted">Enter transaction ID only ex: 8487dftdft</small>-->
                   <!--     </div>-->
                
                   <!--     <button type="submit" class="btn btn-primary">Submit</button> <br>-->

                   <!--         </form>-->
                   <!--     @else -->
                   <!--     <h4 style="color:red"> Payment Status: {{ $jobseeker->payment_status==1? 'Paid' : 'Pending' }}</h4>-->
                   <!--     @endif-->
                   <!--     <br><br>-->
                   <!--     <b>After payment, you will be able to get notificaitons and access to join DIU Job Utsob-2022 services </b>  -->

                   <!--     <br><br>-->

                        <div class="table-responsive">
                            <h4><b><u>For Job Seekers:</u></b></h4>
                            <p>For a student getting admission in the best school/institute is always a dream. For fresh 
                                graduates it is always a big challenge to find his/her desired job. Some are really lucky 
                                enough to have a job; it’s likely that they are constantly looking for ways to stay on top 
                                of their roles. Also, getting involved in a career after the start of a retired life in the 
                                wish to contribute to the family or utilizing the time and skills, is a high demand among 
                                the defense personnel. Continuing professional development, working towards that promotion, 
                                or simply working to do their best every day, it’s tough to remain positive when the skies 
                                aren’t always sunny and the birds aren’t singing. </p>
                        </div>
                        <u><h4>Skill.jobs Career Starter Services:</h4></u>
                        <p style="text-align: justify;">
                        For a student getting admission in the best school/institute is always a dream. For fresh graduates it is always a big challenge to find his/her desired job. Some are really lucky enough to have a job; it’s likely that they are constantly looking for ways to stay on top of their roles.  Also, getting involved in a career after the start of a retired life in the wish to contribute to the family or utilizing the time and skills, is a high demand among the defense personnel. Continuing professional development, working towards that promotion, or simply working to do their best every day, it’s tough to remain positive when the skies aren’t always sunny and the birds aren’t singing.


                        </p>
                        <u><h4>Skill.jobs Career Starter Services:</h4></u>
                        <h5>Skill.jobs Résumé Builders Service</h5>
                        <ul>
                            <li>Free resume templates (Standard and machine readable). Opportunity to direct contact with our expert team. Jobseekers can create a free account</li>
                            <li>Unlimited number of downloads. They can make standard and machine readableCV/Resumes from here.</li>
                            <li>Opportunity to get a standard CV/Resume Template.</li>
                            <li>Online portfolio for individual participants sharable to social media like Facebook, LinkedIn etc. They can make a eportfolio Which can add value to their CV/Resume.</li>
                            <li>E-portfolio can be shared with social media like Facebook, Twitter, LinkedIn etc.</li>
                        </ul>

                        <h5> Free subscription to Skill Jobs Employability TestSkill.jobs Employability Skill Test Subscriptions</h5>
                        <ul>
                            <li>Opportunity to create free account</li>
                            <li>One can get access of our 2000+ questions bank</li>
                            <li>Category wise Exam module</li>
                            <li>Learning Management System (LMS) Career Resources</li>
                            <li>BCS, Bank, Primary and others Govt. job exam preparation</li>
                            <li>Employability Skill assessment and certificate</li>
                        </ul>

                        <br>
                        <u><h4>Resume Submit</h4></u>
                        <p>This is an opportunity for all job seekers who want to get hired in their desired position and organization later on. From 200 + local, multinational organizations candidates can submit CV as per their desired positions and company.</p>
                
            </div>
        </div>
    </div>
</div>


@endsection