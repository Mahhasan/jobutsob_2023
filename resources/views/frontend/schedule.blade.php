@extends('frontend.layouts.app')

@section('content')
<!-- PageBanner -->
	<div class="container-fluid page-banner blogpost no-padding">
		<div class="section-padding"></div>
			<div class="container">
				<div class="banner-content-block">
					<div class="banner-content">
						<h3>Event Schedule</h3>
						<ol class="breadcrumb">
							<li><a href="/">Home</a></li>
							<li class="active">Schedule</li>
						</ol>
					</div>
				</div>
			</div>
		<div class="section-padding"></div>
	</div>
<!-- PageBanner /- -->
<div class="container-fluid no-padding schedule-section" id="schedule">
		
		<div class="container">
		    <div class="section-padding"></div>
			<div class="section-header">
				<!--<h3>Schedule</h3>-->
				<span>Our Schedule table</span>
			</div>	
			<div class="schedule-block">
				<img src="/frontend/assets/images/schedule.jpg" alt="schedule"/>
				<div class="col-md-11">
					<ul class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#schedule_1" aria-controls="schedule_1" role="tab" data-toggle="tab">
								<h3>Thursday</h3>
								<span>01-Dec-2022</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#schedule_2" aria-controls="schedule_2" role="tab" data-toggle="tab">
								<h3>Friday</h3>
								<span>02-Dec-2022</span>
							</a>
						</li>
						<li role="presentation">
							<a href="#schedule_3" aria-controls="schedule_3" role="tab" data-toggle="tab">
								<h3>Saturday</h3>
								<span>03-Dec-2022</span>
							</a>
						</li>
					</ul>  
					<div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="schedule_1">
							<div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_1">
										<h4 class="panel-title">
											<span>09:30 am<br>-<br>11:00 am</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_1" aria-expanded="true" aria-controls="schedule_accrodion_content_1">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Mr. Ejajur Rahman</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_1">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Shakawath Hossain </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Mr. Mohiuddin Helal </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Azeem Shah </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue: </b>Prof. Aminul Islam Hall  </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ---------------------------------------------------------------------------- -->
								<div class="panel panel-default intro">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_2">									
										<h4 class="panel-title">
											<span>11:30 am <br>-<br>1:00 pm</span>
											<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_2" aria-expanded="true" aria-controls="schedule_accrodion_content_2">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Kawsar Ahmed </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Engr. Rokmunur Zaman Rony</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_2">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Murad Talkin </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Shameek Monon      </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3.Asif Mustafa Tanna     </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_3">
										<h4 class="panel-title">
											<span>02:00 pm <br>-<br> 3:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_3" aria-expanded="true" aria-controls="schedule_accrodion_content_3">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Ahmed Kamrul Alam</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_3" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_3">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Ahmed Fahad</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Kazi Javed Islam</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_4">
										<h4 class="panel-title">
											<span>4:00 pm<br>-<br>5:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_4" aria-expanded="true" aria-controls="schedule_accrodion_content_4">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_4">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Md. Shahidur Rahman</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Md. Sazzadur Rahman    </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Akthter Jahan Bithy </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														4.Habibul Hassan Symon</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_4" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_4">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Golam Dostogir Harun       </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Dr. Abdullah al Mamun</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Schedule-2--------------------------- -->
						<div role="tabpanel" class="tab-pane fade" id="schedule_2">
							<div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_21">
										<h4 class="panel-title">
											<span>09:30 am<br>-<br>11:00 am</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_21" aria-expanded="true" aria-controls="schedule_accrodion_content_21">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_21" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_21">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Mr. Ejajur Rahman</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_21" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_21">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Shakawath Hossain </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Mr. Mohiuddin Helal </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Azeem Shah </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue: </b>Prof. Aminul Islam Hall  </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ---------------------------------------------------------------------------- -->
								<div class="panel panel-default intro">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_22">									
										<h4 class="panel-title">
											<span>11:30 am <br>-<br>1:00 pm</span>
											<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_22" aria-expanded="true" aria-controls="schedule_accrodion_content_2">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_22">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Kawsar Ahmed </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Engr. Rokmunur Zaman Rony</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_22" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_22">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Murad Talkin </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Shameek Monon      </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3.Asif Mustafa Tanna     </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_23">
										<h4 class="panel-title">
											<span>02:00 pm <br>-<br> 3:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_23" aria-expanded="true" aria-controls="schedule_accrodion_content_23">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_23" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_23">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Ahmed Kamrul Alam</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_23" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_23">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Ahmed Fahad</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Kazi Javed Islam</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_24">
										<h4 class="panel-title">
											<span>4:00 pm<br>-<br>5:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_24" aria-expanded="true" aria-controls="schedule_accrodion_content_24">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_24" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_24">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Md. Shahidur Rahman</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Md. Sazzadur Rahman    </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Akthter Jahan Bithy </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														4.Habibul Hassan Symon</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_24" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_24">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Golam Dostogir Harun       </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Dr. Abdullah al Mamun</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- Schedule-3------------------------ -->
						<div role="tabpanel" class="tab-pane fade" id="schedule_3">
							<div class="panel-group schedule-accordion" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_31">
										<h4 class="panel-title">
											<span>09:30 am<br>-<br>11:00 am</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_31" aria-expanded="true" aria-controls="schedule_accrodion_content_31">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_31" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_31">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Mr. Ejajur Rahman</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_31" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_31">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Shakawath Hossain </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Mr. Mohiuddin Helal </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Azeem Shah </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue: </b>Prof. Aminul Islam Hall  </p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ---------------------------------------------------------------------------- -->
								<div class="panel panel-default intro">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_32">									
										<h4 class="panel-title">
											<span>11:30 am <br>-<br>1:00 pm</span>
											<a  role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_32" aria-expanded="true" aria-controls="schedule_accrodion_content_32">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_32" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_32">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Kawsar Ahmed </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Engr. Rokmunur Zaman Rony</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_32" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_32">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Murad Talkin </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Shameek Monon      </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3.Asif Mustafa Tanna     </h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_33">
										<h4 class="panel-title">
											<span>02:00 pm <br>-<br> 3:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_33" aria-expanded="true" aria-controls="schedule_accrodion_content_33">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_33" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_33">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>Ahmed Kamrul Alam</h3>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_33" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_33">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Ahmed Fahad</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2.Kazi Javed Islam</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- ------------------------------------------ -->
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="schedule_accrodion_heading_34">
										<h4 class="panel-title">
											<span>4:00 pm<br>-<br>5:30 pm</span>
											<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#schedule_accrodion_content_34" aria-expanded="true" aria-controls="schedule_accrodion_content_34">
												Title
											</a>
										</h4>
									</div>
									<div id="schedule_accrodion_content_34" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_34">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Md. Shahidur Rahman</h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Md. Sazzadur Rahman    </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														3. Akthter Jahan Bithy </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														4.Habibul Hassan Symon</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b> International Conference Hall </p>
												</div>
											</div>
										</div>
									</div>
									<div id="schedule_accrodion_content_34" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="schedule_accrodion_heading_34">
										<div class="panel-body">
											<div class="author-box">
												<div class="author-content" style="margin: -28px 0px 0px 0px;">
													<h3><b>Speaker: </b>1. Golam Dostogir Harun       </h3><br>
													<h3 style="margin-left: 82px; margin-top: 0px; margin-bottom: 0px;">
														2. Dr. Abdullah al Mamun</h3><br>
													<!-- <span style="margin-left: 80px;">Public Speaker</span> -->
													<!-- <a href="#" title="11:30 AM - 01:00 AM">11:30 AM - 01:00 AM</a>
													<a class="btn-event" href="#" title="About The Events">About the events</a> -->
													<p><b>Venue:</b>Prof. Aminul Islam Hall  </p><br>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="section-padding"></div>
	</div>
@endsection