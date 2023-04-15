@extends('frontend.layouts.app')

@section('content')
<!-- PageBanner -->
	<div class="container-fluid page-banner blogpost no-padding">
		<div class="section-padding"></div>
			<div class="container">
				<div class="banner-content-block">
					<div class="banner-content">
						<h3>Speakers</h3>
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li class="active">Speakers</li>
						</ol>
					</div>
				</div>
			</div>
		<div class="section-padding"></div>
	</div><!-- PageBanner /- -->
<!--<div class="container-fluid no-padding team-section" id="speakers">-->
<!--		<div class="section-header">-->
<!--			<h3>meet our great speakers</h3>-->
<!--			<span>Our Great Voices</span>-->
<!--		</div>-->
<!--		<ul id="team-carousel">-->
<!--			<li data-thumb="/frontend/assets/images/team-thumb1.jpg">-->
<!--				<div class="col-md-6 no-padding larg-thumb">-->
<!--					<img src="/frontend/assets/images/team1.jpg" width="960" height="670" alt="team1"/>-->
<!--				</div>-->
<!--				<div class="container">-->
<!--					<div class="col-md-6 no-padding">-->
<!--						<div class="team-content">-->
<!--							<h3>Harry richards</h3>-->
<!--							<a href="#" title="Public Speaker">Public Speaker</a>-->
<!--							<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>-->
<!--							<ul>-->
<!--								<li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--								<li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--								<li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--								<li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--							</ul>-->
<!--							<div class="team-event-carousel">-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>-->
<!--			<li data-thumb="/frontend/assets/images/team-thumb2.jpg">-->
<!--				<div class="col-md-6 col-xs-12 no-padding larg-thumb">-->
<!--					<img src="/frontend/assets/images/team2.jpg" width="960" height="670" alt="team2"/>-->
<!--				</div>-->
<!--				<div class="container">-->
<!--					<div class="col-md-6 no-padding">-->
<!--						<div class="team-content">-->
<!--							<h3>Andrew richards 2</h3>-->
<!--							<a href="#" title="Public Speaker">Public Speaker</a>-->
<!--							<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>-->
<!--							<ul>-->
<!--								<li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--								<li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--								<li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--								<li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--							</ul>-->
<!--							<div class="team-event-carousel">-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>-->
<!--			<li data-thumb="/frontend/assets/images/team-thumb3.jpg">-->
<!--				<div class="col-md-6 no-padding larg-thumb">-->
<!--					<img src="/frontend/assets/images/team3.jpg" width="960" height="670" alt="team3"/>-->
<!--				</div>-->
<!--				<div class="container">-->
<!--					<div class="col-md-6 no-padding">-->
<!--						<div class="team-content">-->
<!--							<h3>Daniel richards 3</h3>-->
<!--							<a href="#" title="Public Speaker">Public Speaker</a>-->
<!--							<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>-->
<!--							<ul>-->
<!--								<li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--								<li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--								<li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--								<li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--							</ul>-->
<!--							<div class="team-event-carousel">-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>		-->
<!--			<li data-thumb="/frontend/assets/images/team-thumb4.jpg">-->
<!--				<div class="col-md-6 no-padding larg-thumb">-->
<!--					<img src="/frontend/assets/images/team4.jpg" width="960" height="670" alt="team4"/>-->
<!--				</div>-->
<!--				<div class="container">-->
<!--					<div class="col-md-6 no-padding">-->
<!--						<div class="team-content">-->
<!--							<h3>Harry richards 4</h3>-->
<!--							<a href="#" title="Public Speaker">Public Speaker</a>-->
<!--							<p>The first mate and his Skipper too will do their very best to make the others comfortable in their tropic island nest. And if you threw a party - invited everyone you knew. You would see the biggest gift would be from me and the card.</p>-->
<!--							<ul>-->
<!--								<li class="fb"><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--								<li class="twt"><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--								<li class="gp"><a title="GooglePlus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--								<li class="lnk"><a title="LinkedIn" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--							</ul>-->
<!--							<div class="team-event-carousel">-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--								<a href=""><img src="/frontend/assets/images/team-evnt1.jpg" alt="team-evnt1" width="121" height="89"/></a>-->
<!--							</div>-->
<!--						</div>-->
<!--					</div>-->
<!--				</div>-->
<!--			</li>-->
<!--		</ul>-->
<!--	</div>-->

<h1 style="text-align: center; padding: 100px 100px;">Coming Soon</h1>
@endsection