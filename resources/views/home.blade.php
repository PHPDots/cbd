@extends('layouts.master')


@section('content')
<section class="home_slider" id="banner">
	<div class="video-controls pulse animated infinite">
		<button class="btn vidbtn" type="button" id="vidbtn"><i class="fa fa-volume-off"></i></button>
	</div>
	<div class="video_div">
		<video autoplay loop id="video-1" muted type='video/mp4' height="100%">
			<source src="" type="video/mp4" id="mp4_src">
			<source src="" type="video/webm" id="webm_src">
			<source src="" type="video/ogg" id="ogg_src">
		</video>
	</div>
	<div class="slider_content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-caption">
						<h1>Windy <span>City Family Dental</span></h1>
						<p>The areas most advanced dental office with services for the whole family</p>
						<div class="d-flex">
							<a class="theme-btn" href="#" data-toggle="modal" data-target="#mkappoint">
								<i class="btn-img"></i>Contact Us
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about">
	<div class="about-inner">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-4 mar-t-50">
					<h2 class="sub-title"><span>Welcome to</span>Windy City Family Dental</h2>
					<p>When you visit Windy City Family Dental,  you will experience all that modern dentistry has to offer, including a comprehensive list of general, restorative and cosmetic dental care services to meet the needs of the whole family. Our goal is to assist each patient in achieving and maintaining long term dental health and a beautiful smile. We pride ourselves in giving you a personalized attention and offer you a full range of dental services using the most current state-of-the art dental technology and techniques.</p>
					<div class="d-flex">
						<a class="theme-btn" href="{{ asset('office-tour.html') }}">
							<i class="btn-img"></i>Office Tour
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="office-img">
			<img src="{{ asset('images/office-tour.jpg') }}" alt="" />
		</div>
		<div class="office-img2">
			<img src="{{ asset('images/office-tour2.jpg') }}" alt="" />
		</div>
	</div>
</section>


<section>
	<div class="service">
		<div class="container">
			<div class="row ">
				<div class="col-md-4">
					<div class="service-box">
						<div class="ico-wrap">
							<img src="{{ asset('images/service-icon.svg') }}" alt="" />
						</div>
						<div class="text-wrap">
							<h2 class="service-title">Family Dentistry</h2>
							<p class="service-content">
								<a href="{{ asset('general-family-dentistry.html') }}">Learn More</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-box">
						<div class="ico-wrap">
							<img src="{{ asset('images/service-icon.svg') }}" alt="" />
						</div>
						<div class="text-wrap">
							<h2 class="service-title">Cosmetic Dentistry</h2>
							<p class="service-content">
								<a href="{{ asset('cosmetic-dentistry.html') }}">Learn More</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service-box">
						<div class="ico-wrap">
							<img src="{{ asset('images/service-icon.svg') }}" alt="" />
						</div>
						<div class="text-wrap">
							<h2 class="service-title">Restorative Dentistry</h2>
							<p class="service-content">
								<a href="{{ asset('restorative-dentistry.html') }}">Learn More</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="appointment">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2 class="sub-title">
						<span>Appointment form</span>Make an Appointment
					</h2>
					<div class="appoint-form">						
						{!! Form::open(['route' => 'submit-contact', 'files' => true,'id' => 'submit-contact']) !!}
							<div class="row">
								<div class="col-md-12 mar-b-30">        
							        {!! 
							        	Form::text('name',null,['class' => 'form-control', "placeholder" => "Your Name"]) 
							        !!}
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mar-b-30">
							        {!! 
							        	Form::text('email',null,['class' => 'form-control', "placeholder" => "Your Email"]) 
							        !!}							        
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 mar-b-30">
							        {!! 
							        	Form::textarea('message',null,['class' => 'form-control', "placeholder" => "Your Message","rows" => 4]) 
							        !!}
							    </div>
							</div>
							<div class="d-flex">
								<input type="hidden" name="page" value="home" />
								<button class="theme-btn">
									<i class="btn-img"></i> Submit
								</button>
							</div>
						{!! Form::close() !!}
					</div>
				</div>
				<div class="col-md-6">
					<div class="appoint-bg">
						<img src="{{ asset('images/appoint-bg.png') }}" alt="" />
					</div>
					<div class="appoint-doctor">
						<img src="{{ asset('images/appoint-doctor.png') }}" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="doctor">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="sub-title">
						<span>Doctors</span>Meet Our Team
					</h2>
				</div>
				<div class="col-md-3">
					<div class="team">
						<img class="img-fluid" src="{{ asset('images/team-member.jpg') }}" alt="" />
						<div class="team-info">
							<div class="team-info-inner">
								<h4>Dr. Richard Marx</h4>
								<p>(D.D.S)</p>
							</div>
						</div>
						<div class="effect-doctor">
							<a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="https://twitter.com/DentalWindy" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team">
						<img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
						<div class="team-info">
							<div class="team-info-inner">
								<h4>Dr. Richard Marx</h4>
								<p>(D.D.S)</p>
							</div>
						</div>
						<div class="effect-doctor">
							<a href="https://www.facebook.com/windycityfamilydental" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/DentalWindy" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team">
						<img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
						<div class="team-info">
							<div class="team-info-inner">
								<h4>Dr. Richard Marx</h4>
								<p>(D.D.S)</p>
							</div>
						</div>
						<div class="effect-doctor">
							<a href="https://www.facebook.com/windycityfamilydental" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/DentalWindy" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="#">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="team">
						<img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
						<div class="team-info">
							<div class="team-info-inner">
								<h4>Dr. Richard Marx</h4>
								<p>(D.D.S)</p>
							</div>
						</div>
						<div class="effect-doctor">
							<a href="https://www.facebook.com/windycityfamilydental" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
							<a href="https://twitter.com/DentalWindy" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
							<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center mar-t-60">
					<div class="d-flex justify-content-center">
						<a class="theme-btn" href="{{ asset('our-team.html') }}">
							<i class="btn-img"></i>View More
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="testimonial-wrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="sub-title text-center">
						<span class="text-white">Testimonials</span>What our patients say
					</h2>
				</div>
				<div class="col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class=""></li>
							<li data-target="#myCarousel" data-slide-to="1" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="2" class=""></li>
						</ol>
						<!-- Wrapper for carousel items -->
						<div class="carousel-inner">
							<div class="item carousel-item active">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<div class="testimonial-wrapper">
											<div class="row">
												<div class="col-md-8">
													<div class="testimonial">
														Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
													</div>
													<div class="media">
														<div class="media-left d-flex mr-3">
															<img src="{{ asset('images/client.jpg') }}" alt="">
														</div>
														<div class="media-body">
															<div class="overview">
																<div class="name">Luisa R.</div>
																<div class="details">Business</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item carousel-item">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<div class="testimonial-wrapper">
											<div class="row">
												<div class="col-md-8">
													<div class="testimonial">
														Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
													</div>
													<div class="media">
														<div class="media-left d-flex mr-3">
															<img src="{{ asset('images/client.jpg') }}" alt="">
														</div>
														<div class="media-body">
															<div class="overview">
																<div class="name">Luisa R.</div>
																<div class="details">Business</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="item carousel-item">
								<div class="row">
									<div class="col-md-10 offset-md-1">
										<div class="testimonial-wrapper">
											<div class="row">
												<div class="col-md-8">
													<div class="testimonial"> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
													<div class="media">
														<div class="media-left d-flex mr-3">
															<img src="{{ asset('images/client.jpg') }}" alt="" />
														</div>
														<div class="media-body">
															<div class="overview">
																<div class="name">Luisa R.</div>
																<div class="details">Business</div>
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

						<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
							<span class="fa fa-chevron-left"></span>
						</a>
						<a class="carousel-control-next" href="#myCarousel" data-slide="next">
							<span class="fa fa-chevron-right"></span></a>
						</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="video-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-7 offset-md-1">
					<div class="video">
						<div class="embed-container">
							<iframe src="https://www.youtube.com/embed/SOTcQTm2p5Y" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="twitter-feed">
						<i class="fa fa-twitter" aria-hidden="true"></i>
						<p>All of our weeks are great because of our patients. <br>
							<a href="#">https://t.co/8q70CoOpt9</a> <span>- 14th May 2018</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection

@section('scripts')
<script src="{{ asset('js/home.js') }}" type="text/javascript"></script>
@endsection
