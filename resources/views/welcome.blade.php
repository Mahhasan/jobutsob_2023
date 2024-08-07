
@extends('frontend.layouts.app')
@section('content')
@include('frontend.layouts.slider')
<style>
	.carousel-container {
	position: relative;
	width: 100%;
	max-width: 90%;
	margin: 0 auto;
	overflow: hidden;
	}
	.carousel-slide {
	display: flex;
	width: calc(100% / 3 * 12); /* Display five images in the slide */
	height: 100%; /* Adjust the height as needed */
	transition: transform 0.3s ease-in-out;
	}
	.carousel-slide img {
	width: calc(100% / 3); /* Display three images at a time */
	height: 100%;
	object-fit: cover;
	}
	.carousel-prev,
	.carousel-next {
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	font-size: 30px;
	cursor: pointer;
	}
	.carousel-prev {
	left: 10px;
	}
	.carousel-next {
	right: 10px;
	}
	/* Custom css for archive */
	.archive-summary{
		padding: 10px; 
		border: #55a479 1px solid; 
		border-radius: 5px; 
		margin-bottom: 20px; 
		height: 134px; color: white; 
		background-color: #006eb5;
		font-family: inherit;
	}
	.centered-content {
        justify-content: center;
        align-items: center;
        height: 100%;
    }
</style>
<!-- Register & Countdown Section Start -->
<div class="meeta-about-section">
	<div class="container">
		<div class="row">
			<div class="col-sm-offset-3 col-sm-6 text-center">
				<div class="centered-content" style="margin-top: 48px; margin-bottom: 48px">
					<!-- Your countdown content goes here -->
					<div class="meeta-countdown countdown" data-countdown="2023/11/10" data-format="short">
						<div class="single-countdown">
							<span class="count countdown__time daysLeft"></span>
							<span class="value countdown__time daysText"></span>
						</div>
						<div class="single-countdown">
							<span class="count countdown__time hoursLeft"></span>
							<span class="value countdown__time hoursText"></span>
						</div>
						<div class="single-countdown">
							<span class="count countdown__time minsLeft"></span>
							<span class="value countdown__time minsText"></span>
						</div>
						<div class="single-countdown">
							<span class="count countdown__time secsLeft"></span>
							<span class="value countdown__time secsText"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid latest-blog latest-blog-section">
		<div class="container section-padding" id="about">
		    <div class="row">
    			<div class="section-header">
    				<h3>DIU Job Utsob 2023</h3>
    			</div>
    			<div class="section-body">
    				<P>
    				    DIU JOB UTSOB -2023 is set to be the ‘Big Bang Central Career Event’ of Daffodil International University and will act as a platform for corporate stalwarts to interact with a quality future workforce under the Daffodil family’s constant intent to encourage, facilitate and sustain industry-academia collaborations.
    				</p>
    				<p>
    					The program, with its motivation as the tagline- ‘Connecting Talents: Unlock the Border of Opportunities’, looks forward to having a sustainable impact with the presence of freshers, highly skilled job seekers, interns/learners & experienced alumni network interested to make job transitions, recruiters and corporate Leaders, employers, and institutions.
    				</P>
    			</div>
			</div>
		</div>
	</div>
	<!-- Event highlights -->
	<div class="container-fluid no-padding introduction-section">
		<div class="introduction-carousel">
			<div style="min-height: 534px;" class="col-md-12 no-padding">
				<div style="min-height: 534px; padding-top: 25px" class="introduction-block">
					<h3 class="block-title">Event highlights</h3>
					<!-- <span class="icon icon-ChartUp"></span> -->
					<p style="font-size: 18px; line-height: 25px;">
						♦ 250+ booths of different companies<br>
                        ♦ 5000+ actual job openings<br>
                        ♦ 1000 internships<br>
                        ♦ 250+ actual recruiters. <br>
                        ♦ 50 National HR leaders session<br>
                        ♦ On campus interview<br>
                        ♦ Grooming session<br>
                        ♦ CV & video resume update<br>
                        ♦ Employability skill test assessment
					</p>
				</div>
			</div>
			<div style="min-height: 534px;" class="col-md-12 no-padding">
				<div style="min-height: 534px; padding-top: 25px" class="introduction-block">
					<h3 class="block-title">Who can join ♦</h3>
				    <!-- <span class="icon icon-Heart"></span> -->
					<p style="font-size: 18px; line-height: 25px;">
					    ♦ Graduates from 192, 193 & 201 batches of all disciplines of Daffodil International University.<br>
                        ♦ Current students of 9th-11th semesters, for internship opportunities <br>
                        ♦ Passed out DIU alumni for job placement & job changing opportunities<br>
					</p>
					
				</div>
			</div>
			<div style="min-height: 534px;" class="col-md-12 no-padding">
				<div style="min-height: 534px; padding-top: 25px" class="introduction-block">
					<h3 class="block-title">Benefits to join</h3>
				    <!-- <span class="icon icon-Heart"></span> -->
					<p style="font-size: 18px; line-height: 25px;">
						♦	Job placement, internship placement & job changing opportunities in 
						various renowned organizations<br>
						♦	Empower and accelerate your movement in career readiness with knowledge +  
						Skills + attitudes imparted by the corporate leaders, trainers & career coaches<br>
						♦	Personal and professional branding opportunities<br>
						♦	Chance of HR networking and creating long term professional
						relationships with corporate leaders/speakers groups. <br>
					</p>
		        </div>
		    </div>
	    </div>
    </div>
	<!-- MESSAGE FROM DIU MANAGEMENT -->
	<div class="container-fluid latest-blog latest-blog-section no-padding">
		<div class="container section-padding">
			<div class="row">
			    <div class="section-header">
    				<h3>MESSAGE FROM DIU MANAGEMENT </h3>
    				<!-- <span>Recent Updates</span> -->
			    </div>
    			<div class="section-body">
    				<P>
    				    With a tremendously successful track record  of ‘On-Campus Spot Recruitment’ events, ‘DIU job Utsob’ shall continue to be a regular yearly event with an aim to develop an understanding of the internship and employment needs largely in the area of corporate and academia. 
    				</p>
    				<p>
    					DIU Job Utsob-2023 can be considered as the “meet-up point” for addressing all that is needed and all that could be achieved through a shared lane of vision between the employers and the bodies involved with creating employees, changemakers, and future industry leaders. The event shall ensure the presence of talents & employers under a roof where the “Transition in career” is always heavily inspired.
    				</P>
    				<p>
    					We believe in a strong spirit of collaboration between academia and industry and we will always cherish the relationship as being fundamental to our coexistence and collective success. To further strengthen and forge this symbiotic relationship, Daffodil International University (DIU) has envisioned a common platform - DIU Job Utsob. This shall be an interesting opportunity where the respective industry representatives get to interact closely with our students and graduates with an intent to hire their potential employees, changemakers, and future leaders of respective departments. We look forward to your active participation and support as always. ”
    				</p>
    			</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-sm-6 ">
					<div class="text-center">
						<img src="/frontend/assets/images/vc.png" style="height: 240px; width: auto; margin: 20px 0px 10px 0px;" alt="">
						<p><b>Prof Dr. M. Lutfar Rahman</b><br>Vice Chancellor, DIU</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="text-center">
						<img src="/frontend/assets/images/provc.png" style="height: 240px; width: auto; margin: 20px 0px 10px 0px;" alt="">
						<p><b>Prof. Dr. S.M. Mahbub Ul Haque Majumder</b> <br> Pro Vice Chancellor, DIU 	</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="text-center">
						<img src="/frontend/assets/images/deen.png" style="height: 240px; width: auto; margin: 20px 0px 10px 0px;" alt="">
						<p><b>Prof. Dr. Mostafa Kamal</b><br>Dean, Academic Affairs, DIU</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Date -->
	<div class="container-fluid hurryup-booking-section no-padding">
		<div class="container">
			<div class="card">
				<div class="hurryup-block">
					<div id="timer-slider" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<div class="timer-box">
									<h3>DIU JOB UTSOB-2023 </h3>
									<div class="content-center">
										<p><b>Date: November 10-11, 2023 (Friday-Saturday).</b></p>
									</div>
									<div class="content-center">
										<p><b>Venue: Daffodil Smart City, Birulia, Savar, Dhaka – 1216</b></p>
									</div>
									<p>Don't miss the opportunity</p>
									<a href="{{'alljob'}}"><button type="submit" class="btn" style="color: white; background-color: #29363e; margin-top: -7px; border-radius: 0px;">Discover Job</button></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- winner list -->
	<div class="container-fluid testimonial-section no-padding" style="background-color: #eff0f0;">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="carousel-container">
			<div class="section-header">
				<h3>Job Winners list of Job Utsob-2022</h3>
			</div>
			<div class="carousel-slide">
				<img src="/frontend/assets/images/winners1.jpg" alt="Image 1">
				<img src="/frontend/assets/images/winners2.jpg" alt="Image 2">
				<img src="/frontend/assets/images/winners3.jpg" alt="Image 3">
				<img src="/frontend/assets/images/winners4.jpg" alt="Image 4">
				<img src="/frontend/assets/images/winners5.jpg" alt="Image 5">
				<img src="/frontend/assets/images/winners6.jpg" alt="Image 6">
				<img src="/frontend/assets/images/winners7.jpg" alt="Image 7">
				<img src="/frontend/assets/images/winners8.jpg" alt="Image 8">
				<img src="/frontend/assets/images/winners9.jpg" alt="Image 9">
				<img src="/frontend/assets/images/winners10.jpg" alt="Image 10">
				<img src="/frontend/assets/images/winners11.jpg" alt="Image 11">
				<img src="/frontend/assets/images/winners12.jpg" alt="Image 12">
			</div>
			<a class="carousel-prev" onclick="prevSlide()">&#10094;</a>
			<a class="carousel-next" onclick="nextSlide()">&#10095;</a>
		</div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
	</div>
	<div class="section-padding"></div>
	<!-- video section -->
	<div class="container-fluid no-padding">
		<div class="section-padding"></div>
		<div class="container">
			<!-- <div class="section-header">
				<h3>Latest news from events</h3>
				<span>Recent Updates</span>
			</div> -->
			<!-- <div class="row">
				<div class="col-md-6 content-center">
					<video style="box-shadow: 0px 0px 10px 0px #8d8e8e;" width="100%" poster="/frontend/assets/images/poster1.jpg" controls>
						<source  src="/frontend/assets/video/video1.mp4" type="video/mp4">
					</video>
				</div>
				<div class="col-md-6 content-center">
					<video style="box-shadow: 0px 0px 10px 0px #8d8e8e;" width="100%" poster="/frontend/assets/images/poster2.jpg"  controls>
						<source src="/frontend/assets/video/video2.mp4" type="video/mp4">
					</video>
				</div>
			</div> -->
			<div class="row justify-content-center">
				<div class="col-md-6" style="margin-bottom: 32px;">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item mb-5" src="https://www.youtube.com/embed/HU5OFF5k4iY?si=I_w1IzR8YXHZnUMc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6" style="margin-bottom: 32px;">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/OPFdpq0JlxQ?si=XrrjuSacuEbYDWwr" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6" style="margin-bottom: 32px;">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vbBLE_jc6bM?si=ybrBxa9p_o37GaHK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
					</div>
				</div>
			</div>

		</div>
		<div class="section-padding"></div>
	</div>
@endsection