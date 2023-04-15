@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card" style="box-shadow: 0px 2px #3498db;">
                <div class="card-header">Virtual Job Fest Fall 2021 Services </div>
                

                <div class="card-body">
                <u><h4>For all participants:</h4></u>
                <ul>
                    <li>Job Application</li>
                    <li>Job placement opportunity</li>
                    <li>Regular Job opportunities alert</li>
                    <li>Resume & Online portfolio Development</li>
                    <li>Access in two Special Session out of Six
                       <ul>
                           <li>Exploring new career by articulating Employability Skills</li>
                           <li>Digital Transformation in the fourth Industrial Revolution</li>
                       </ul>
                    </li>
                </ul>

                <u><h4>For Premium Participant</h4></u>
                <p>
                <b> Training & Development Fee: 200 BDT</b>  <br>
                Services for Paid Participant: <br>

                If anyone interested to get some premium Service <br>
                Features include: <br>

                </p>
                <ul>
                    <li>Access in Seven Special Grooming Session</li>
                    <li>Skill Assessment Test</li>
                    <li>Special Placement Services</li>
                    <li>Participation Certificate</li>
                    <li>Special Job alert Services</li>
                </ul>

                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}  
                    </div><br />
                @endif

                @if($errors->any())
                    {!! implode('', $errors->all('<div class="alert alert-danger">:message</div>')) !!}
                @endif

                   
              
                <h4 style="color:red;">Pay BDT. 200 To Avail Premium Services .Please register and login to pay.<br>
                
                </h4>
                
               
            
                <b>After payment, you will be able to get notificaitons and access to join premium services</b>  

                <br><br>

                <div class="table-responsive">
                <h4><b><u>VJF S21 Events:</u></b></h4> Coming Soon!
                <!--<table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Date and Day</th>
                        <th>Time</th>
                        <th>Session Title</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>18 June</td>
                        <td>8:30 PM</td>
                        <td style="font-weight:bold">Facebook Live Inaugural Session</td>
                    </tr>

                    <tr>
                        <td rowspan="3">19 June</td>
                        <td>10:00 AM</td>
                        <td style="font-weight:bold">Design Thinking in Career: Power of Transformation By Mr. Syed Mizanur Rahman</td>
                    </tr>
                    <tr>
                        
                        <td>12: 00 PM</td>
                        <td style="font-weight:bold">Neuroleadership: Lead with your Brain By Mr. Ejaj-ur -Rahman</td>
                    </tr>
                    <tr>
                        
                        <td>7:30 PM</td>
                        <td style="font-weight:bold">Tech Savviness Skill for the Job Market By Mr. K M Hasan Ripon</td>
                    </tr>
                    <tr>
                        <td rowspan="5">20 June</td>
                        <td>Proposed</td>
                        <td style="font-weight:bold">Tactics for facing interview with confidence By Mr. Mohammad Shibli Shahriar</td>
                    </tr>
                    <tr>
                        <td>5:00 PM</td>
                        <td style="font-weight:bold">Stand out with Right Resume By Mr. Kamruzzaman</td>
                    </tr>
                    <tr>   
                        <td>8:30 PM</td>
                        <td style="font-weight:bold">Emotional Intelligence: Why Does It Matter? By Mr. Moinuddin Chowdhury</td>
                    </tr>
                    <tr>
                        <td>7:30 PM</td>
                        <td style="font-weight:bold">Lead yourself to success in Career By Mr. Quazi M Ahmed</td>
                    </tr>
                    <tr>
                        <td>8:30 PM</td>
                        <td style="font-weight:bold">Facebook Live Plenary Session</td>
                    </tr>
                  
                    </tbody>
                </table> -->
                </div>
                <u><h4>For Job Seekers:</h4></u>
                <p style="text-align: justify;">
                For a student getting admission in the best school/institute is always a dream. For fresh graduates it is always a big challenge to find his/her desired job. Some are really lucky enough to have a job; it’s likely that they are constantly looking for ways to stay on top of their roles.  Also, getting involved in a career after the start of a retired life in the wish to contribute to the family or utilizing the time and skills, is a high demand among the defense personnel. Continuing professional development, working towards that promotion, or simply working to do their best every day, it’s tough to remain positive when the skies aren’t always sunny and the birds aren’t singing.


                </p>
                <u><h4>Skill.jobs Career Starter Services:</h4></u>
                <h5>Skill.jobs Résumé Builders Service</h5>
                <ul>
                    <li>Free resume templates (Standard and machine readable). Opportunity to direct contact with our expert team. Jobseekers can create a free account</li>
                    <li>Unlimited number of downloads. They can make standard and machine readableCV/Resumes from here.</li>
                    <li>Opportunity to get a standard CV/Resume Template.</li>
                    <li>Online portfolio for individual participants sharable to social media like Facebook, LinkedIn etc.. They can make a eportfolio Which can add value to their CV/Resume.</li>
                    <li> E-portfolio can be shared with social media like Facebook, Twitter, LinkedIn etc.</li>
                </ul>

                <h5> Free subscription to Skill Jobs Employability TestSkill.jobs Employability Skill Test
                Subscriptions</h5>
                <ul>
                    <li>Opportunity to create free account</li>
                    <li>One can get access of our 2000+ questions bank</li>
                    <li>Category wise Exam module</li>
                    <li>Learning Management System (LMS) Career Resources</li>
                    <li>BCS, Bank, Primary and others Govt. job exam preparation</li>
                    <li>Employability Skill assessment and certificate</li>
                </ul>
                <br>
                <u><h4>Skill.jobs Career Guidance/Mentoring Service</h4></u>
                <p>Opportunities to get in touch with the placement team and expertise for career guideline, counseling, job placement etc.</p>
                <u><h4>Resume Submit</h4></u>
                <p>This is an opportunity for all job seekers who want to get hired in their desired position and organization later on. From 100 + local, multinational organizations candidates can submit CV as per their desired positions and company.</p>

                <u><h4>Special Online Sessions for the event</h4></u>
                <ul>
                <li>Session 1:
                    <ul><li>Exploring new career by articulating Employability Skills </li></ul>                 
                </li>
                <li>Session 2:
                    <ul><li>Tactics for facing interview with confidence</li></ul>       
                </li>
                <li>Session 3:
                    <ul><li>Comprehensive Resume Writing Techniques</li></ul>       
                </li>
                <li>Session 4:
                    <ul><li>Digital Transformation in the fourth Industrial Revolution </li></ul>       
                </li>
                <li>Session 5:
                    <ul><li>Prepare yourself for an independent profession </li></ul>       
                </li>
                <li>Session 6:
                    <ul><li>Career Planning: A Pathway to Employment </li></ul>       
                </li>
                <li>Session 7:
                    <ul><li>Neuroleadership : Lead with brain </li></ul>       
                </li>
                </ul>



  
                </div>
            </div>
           
           
        </div>
    </div>
</div>


@endsection