<header class="header-main container-fluid no-padding">
	<!-- Top Header -->
	<!-- Top Header /- -->
	<!-- Menu Block -->
	<div class="menu-block container-fluid no-padding">
		<!-- Container -->
		<div class="container">
			<!-- User -->
			<a href="/" class="user" title="Logo">
			<img src="{{asset('frontend/assets/images/logo_2023.png')}}" alt="logo" style="max-height:80px; max-width: 120px; margin-top: 5px;"/>
				<!-- <i class="fa fa-user"></i> -->
			</a><!-- User /- -->
			<!-- <a href="#" class="user-sticky " title="User">
				<img src="images/logo.png" alt="">
			</a> -->
			<!-- Expanding Search -->
			<div class="menu-search">
				<div id="sb-search" class="sb-search">
					<form>
						<input type="hidden" class="sb-search-input" placeholder="Enter your search term..." type="text" value="" name="search" id="search" />
						<button class="sb-search-submit" style="display:none"><i class="fa fa-search"></i></button>
						<span class="sb-icon-search"></span>
					</form>
				</div>
			</div>
			<!-- Expanding Search /- -->
			<div class="col-md-10 col-sm-12">
				<!-- Navigation -->
				<nav class="navbar ow-navigation">
					<div class="navbar-header">
						<button aria-controls="navbar" aria-expanded="true" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a title="Logo" href="#" class="navbar-brand"><img src="{{asset('frontend/assets/images/logo_2023.png')}}" alt="logo"/><span>Job Utsob</span></a>
					</div>
					<div class="navbar-collapse collapse" id="navbar">
						<ul class="nav navbar-nav menubar">
							<li style="margin: 0 1px;"><a title="Home" href="/">Home</a></li>
							<li style="margin: 0 1px;" class="dropdown">
								<a aria-expanded="true" aria-haspopup="true" role="button"
									class="dropdown-toggle" title="About" href="#">About </a>
									<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a style="font-size: 11px; " title="About Event" href="{{route('about-event')}}">About Event</a></li>
									<li><a style="font-size: 11px; " title="About Organizer" href="{{route('about-organizer')}}">About Organizer</a></li>
								</ul>
							</li>
							<li style="margin: 0 1px;"><a title="Schedule" href="{{route('schedule')}}">Schedule</a></li>
							<!-- <li style="margin: 0 1px;"><a title="Speakers" href="{{route('speakers')}}">Speakers</a></li> -->
							<li style="margin: 0 1px;"><a title="Participants" href="{{route('participants')}}">Participants</a></li>
							<li style="margin: 0 1px;" class="dropdown">
								<a aria-expanded="true" aria-haspopup="true" role="button"
									class="dropdown-toggle" title="About" href="#">Archive </a>
									<i class="ddl-switch fa fa-angle-down"></i>
								<ul class="dropdown-menu">
									<li><a style="font-size: 11px; " title="Job Utsob-2022" href="{{route('job-utsob-2022')}}">Job Utsob 2022</a></li>
								</ul>
							</li>
							<li style="margin: 0 1px;"><a title="Contact" href="{{route('contact')}}">Contact Us</a></li>
							<li style="margin: 0 1px;"><a title="Register" href="{{ route('jobseeker.create') }}">Register</a></li>
							<li style="margin: 0 1px;"><a title="Discover Job" href="/alljob" 
							style="background-color: #BA1F1C ;color: #fff;display: inline-block;font-family: 'Myriad Pro Regular';text-align:center; padding: 10px; margin-top: 20px; border-radius: 10px;"
							>Discover Job</a></li>
						</ul>
					</div>
				</nav><!-- Navigation /- -->
			</div>
		</div><!-- Container /- -->
	</div><!-- Menu Block /- -->
</header>