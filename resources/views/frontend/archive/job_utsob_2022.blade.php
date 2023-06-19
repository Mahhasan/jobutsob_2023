@extends('frontend.layouts.app')
@section('content')
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
</style>
<!-- PageBanner -->
	<div class="container-fluid page-banner blogpost no-padding">
		<div class="section-padding"></div>
		<div class="container">
			<div class="banner-content-block">
				<div class="banner-content">
					<h3>Archive</h3>
					<ol class="breadcrumb">
						<li><a href="/">Home</a></li>
						<li class="active">Job Utsob 2022</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<div class="section-padding"></div>
	<div class="section-padding"></div>
	<!-- PageBanner /- -->
    <div class="container-fluid testimonial-section no-padding">
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Summary about DIU Job Utsob-2022</h3>
				</div>
				<table>
				</table>
				<div class="text-center">	
					<div class="row">
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-text">The total number of recruiters who participated:</p>
									<p class="card-text">145</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of recruiters who have conducted interviews during Job Utsob:</p>
									<p class="card-text">62</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">Number of total CV’s dropped during Job Utosob:</p>
									<p class="card-text">14308</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of jobs offered (Position) during Job Utshob:</p>
									<p class="card-text">792</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of jobs offered (Vacancies) during Job Utshob:</p>
									<p class="card-text">2585</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of Internships (Position) offered during Job Utsob:</p>
									<p class="card-text">47</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of Internships offered (Vacancies) during Job Utsob:</p>
									<p class="card-text">218</p>
								</div>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of candidates selected during Job Utshob for the next round of interviews:</p>
									<p class="card-text">367</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="card archive-summary">
								<div class="card-body">
									<p class="card-title">The total number of placed students during Job Utsob:</p>
									<p class="card-text">114</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="section-padding"></div>
	<div class="section-padding"></div>
	<div class="section-padding"></div>
    <!-- --------------Photo------------------ -->
    <div class="container-fluid testimonial-section no-padding" style="background-color: #eff0f0;">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Photo gallery  of Job Utsob-2022</h3>
				</div>
				<div class="row">
					<div class="col-lg-4 col-sm-6 ">
						<div class="text-center">
							<a href="https://photos.google.com/share/AF1QipNj9vcDI57fCV1WUiqGD-kGqrxiHDLKeATLlPHzYFaMFz_PXZUDd0vaS-MvH0arvg?key=dFVYQ2hoX0VZZk9pYWVRS0J4dWQzS0paa0NTUzJ3" class="btn btn-light">
								<img src="/frontend/assets/images/imageday1.jpg" style="height: 100%; width: 100%; margin: 20px 0px 10px 0px;" alt="">
								<p>Day 1</p>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<div class="text-center">
							<a href="https://photos.google.com/share/AF1QipMrSi-UEe3lM6v6S7QJNlqR2FMBj4eAKaTvdvkhoi2ubx0h7hnqHAPZuzH5rGMgZw?key=cU12Z2pwU2hhM2NuUjJPNTktbEp5blpKSkRKTjRB" class="btn btn-light">
								<img src="/frontend/assets/images/imageday2.jpg" style="height: 100%; width: 100%; margin: 20px 0px 10px 0px;" alt="">
								<p>Day 2</p>
							</a>
						</div>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<div class="text-center">
							<a href="https://photos.google.com/share/AF1QipOKrklRNmKwZgJkRTJEnxbfjndBg0hiwj3NZ9ostM85jX1h_xwWI1BySpEXGNEQow?key=VjdjTEQ2aHNDcVpvV0pJY0h3czQtQkc2cWdKY0pR" class="btn btn-light">
								<img src="/frontend/assets/images/imageday3.jpg" style="height: 100%; width: 100%; margin: 20px 0px 10px 0px;" alt="">
								<p>Day 3</p>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
		</div>
	</div>
	<!-- -------------video------------------- -->
    <div class="container-fluid testimonial-section no-padding">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Video Gallery of Job Utsob-2022</h3>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 ">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Ly5RKRBQwg8" allowfullscreen></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 ">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/pIVDauRac2c" allowfullscreen></iframe>
						</div>
					</div>
					<!-- <div class="col-lg-4 col-sm-6 ">
						<div class="text-center">
							<a href="https://photos.google.com/share/AF1QipOKrklRNmKwZgJkRTJEnxbfjndBg0hiwj3NZ9ostM85jX1h_xwWI1BySpEXGNEQow?key=VjdjTEQ2aHNDcVpvV0pJY0h3czQtQkc2cWdKY0pR" class="btn btn-info">
								<img src="/frontend/assets/images/imageday3.jpg" style="height: 100%; width: 100%; margin: 20px 0px 10px 0px;" alt="">
								<p>Day 3</p>
							</a>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
	<div class="section-padding"></div>
	<div class="section-padding"></div>
	<div class="section-padding"></div>
	<!-- --------------Photo------------------ -->
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
				<!-- Add more images as needed -->
			</div>
			<a class="carousel-prev" onclick="prevSlide()">&#10094;</a>
			<a class="carousel-next" onclick="nextSlide()">&#10095;</a>
		</div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		</div>
	</div>
	<div class="section-padding"></div>
	<!-- --------------PDF------------------ -->
    <div class="container-fluid testimonial-section no-padding">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Study Work about Job Utsob-2022</h3>
				</div>
				<div class="row">
					<div class="col-lg-6 col-sm-6 ">
					<p class="text-center"><b>Report by Research Division</b></p>
						<div class="embed-responsive embed-responsive-16by9">
							
							<iframe src="https://drive.google.com/file/d/1-4IHClH69tP_UE9zDLzWnF7kugKk_sD9/preview" width="640" height="480" allow="autoplay"></iframe>
						</div>
					</div>
					<div class="col-lg-6 col-sm-6 ">
					<p class="text-center"><b>Report by Survey Work</b></p>
						<div class="embed-responsive embed-responsive-16by9">
							
							<iframe src="https://drive.google.com/file/d/1_ncp3m-BcdG5QoNOGmkLRz0N4ZXPIfGh/preview" width="640" height="480" allow="autoplay"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
		</div>
	</div>
	<div class="container-fluid testimonial-section no-padding" style="background-color: #eff0f0;">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Participated organization list </h3>
				</div>
				<div class="text-center">
					<img src="/frontend/assets/images/employer.jpg" style="height: 100%; width: 100%; margin: 20px 0px 10px 0px;" alt="">
				</div>
				<div class="section-padding"></div>
				<div class="section-padding"></div>
				<div class="section-padding"></div>
			</div>
		</div>
	</div>
	<!-- --------------PDF------------------ -->
    <div class="container-fluid testimonial-section no-padding">
		<div class="section-padding"></div>
		<div class="section-padding"></div>
		<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>Futurenation-DIU Job Utsob-2022 News Coverage</h3>
				</div>
				<div class="row">
					<h4 class="text-center"><b>Electronic Media Coverage</b></h4>
					<p class="text-center"><a class="btn btn-info" href="https://drive.google.com/drive/folders/1Qkb-91u6ie-h_wZ1bf6_m2stxB7JrtEg?usp=share_link">Link</a></p>
				</div>
				<div class="row">
					<h4 class="text-center"><b>Online News</b></h4>
					<div class="container text-center">
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.thedailystar.net/business/organisation-news/press-releases/news/job-utsob-daffodil-international-university-held-3184636">The Daily Star</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.shomoyeralo.com/details.php?id=206662">Somoyer Alo</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://thenewstimesbd.com/education/job-utsob-at-diu-held/">The News Times</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://businesspostbd.com/corporate/three-day-long-job-utshob-held-at-diu-2022-12-05">The Business Post</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://techvision24.com/%E0%A6%A1%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AB%E0%A7%8B%E0%A6%A1%E0%A6%BF%E0%A6%B2-9/">Techvision</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://digibanglatech.news/english/bangladesh-english/90195/">Digibangla</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://notunshomoy.com/details.php?id=142614">Notun Shomoy</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://bporikromanewsbd.com/2022/12/01/%E0%A6%87%E0%A6%89%E0%A6%8F%E0%A6%A8%E0%A6%A1%E0%A6%BF%E0%A6%AA%E0%A6%BF-%E0%A6%93-%E0%A6%A1%E0%A7%8D%E0%A6%AF%E0%A6%BE%E0%A6%AB%E0%A7%8B%E0%A6%A1%E0%A6%BF%E0%A6%B2%E0%A7%87%E0%A6%B0-%E0%A6%AE/">Bishwabidyalay Porikroma</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://thenewstimesbd.com/education/diu-job-utshob-2022-concludes/">The News Times</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://digibanglatech.news/english/bangladesh-english/90326/">Digibangla</a>
					</div>
				</div>
				<div class="row">
					<h4 class="text-center"><b>Job Fest print Media News</b></h4>
					<p class="text-center"><a class="btn btn-info" href="https://drive.google.com/drive/folders/1hjrKlOSZWJ_dXuqfRusLR-ljthS5fh_8?usp=sharing">Link</a></p>
				</div>
				<div class="row">
					<h4 class="text-center"><b>UNDP News</b></h4>
					<p class="text-center"><a class="btn btn-info" href="https://www.undp.org/bangladesh/press-releases/graduate-employment-private-sector-program">Link</a></p>
				</div>
				<div class="row">
					<h4 class="text-center"><b>DIU Facebook Promotion</b></h4>
					<div class="container text-center">
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://fb.watch/hnFCIj7eQK/">Link 1</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159438787847203/?app=fbl">Link 2</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159440324667203/?app=fbl">Link 2</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159440614002203/?app=fbl">Link 3</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159441912257203/?app=fbl">Link 4</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159443683682203/?app=fbl">Link 5</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159444156907203/?app=fbl">Link 6</a>
						<a class="btn btn-info" style="margin-bottom: 20px" href="https://www.facebook.com/19910327202/posts/10159447517292203/?app=fbl">Link 7</a>
					</div>
				</div>
			</div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
			<div class="section-padding"></div>
		</div>
	</div>
@endsection