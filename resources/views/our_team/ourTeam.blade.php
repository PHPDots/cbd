@extends('layouts.master')

@section('content')
<section class="home_slider our-team-slide" id="banner">
   <div class="video_div banner-div">
	   <div class="header-bg">
		   <svg version="1.1" id="Background" class="svg-bg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 4800 1680" xml:space="preserve">
		   <style type="text/css">
			   .st0{opacity:0.15;fill:#5081F4;enable-background:new    ;}
			   .st1{opacity:0.3;fill:#5081F4;enable-background:new    ;}
			   .st2{fill:#5081F4;}
		   </style>
		   <path id="Shape_1_copy_2" class="st0" d="M5280,1386c0,0-810.8-855.3-2835,6C543.9,2200.9-373.3,1084-480,684v-2505h5760V1386z"/>
		   <path id="Shape_1_copy" class="st1" d="M5280,1326c0,0-810.8-855.3-2835,6C543.9,2140.9-373.3,1024-480,624v-2505h5760V1326z"/>
		   <path class="st2" d="M5280,1266c0,0-810.8-855.3-2835,6C543.9,2080.9-373.3,964-480,564v-2505h5760V1266z"/>
		   </svg>
	   </div>
   </div>
   <div class="slider_content">
	   <div class="container">
		   <div class="row">
			   <div class="col-md-12">
				   <div class="banner-caption sub-banner-caption">
					   <h1>Our Team</h1>
					   <p>We are now accepting new patients!! Call <br/> us and let us better your kids health!</p>
				   </div>
			   </div>
		   </div>
	   </div>
   </div>
</section>

<section class="office-tour">
   <div class="office-tour-inner">
	   <div class="container">
		   <div class="page-title d-block mar-b-60">
			   <h2 class="text-center text-uppercase font-bold page-sub-title">We are now accepting new patients!! Call us and let us better your kids health!</h2>
		   </div>
		   <div class="custom-tab-section">
			   <!-- Nav tabs -->
			   <ul class="nav nav-tabs">
				   <li class="nav-item">
					   <a class="nav-link active" data-toggle="tab" href="#menu1">all</a>
				   </li>
				   <li class="nav-item">
					   <a class="nav-link" data-toggle="tab" href="#menu2">D.D.S.</a>
				   </li>
				   <li class="nav-item">
					   <a class="nav-link" data-toggle="tab" href="#menu3">Office Manager</a>
				   </li>
				   <li class="nav-item">
					   <a class="nav-link" data-toggle="tab" href="#menu4">RDH</a>
				   </li>
				   <li class="nav-item">
					   <a class="nav-link" data-toggle="tab" href="#menu5">DENTAL ASSISTANT</a>
				   </li>
				   <li class="nav-item">
					   <a class="nav-link" data-toggle="tab" href="#menu6">Front Office</a>
				   </li>
			   </ul>
			   <!-- Tab panes -->
			   <div class="tab-content">
				   <div id="menu1" class="tab-pane active">
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
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
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/nicole.png') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Nicole</h4>
												   <p>(OFFICE MANAGER)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/neal.png') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Christ Neal</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/brittany.png') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Brittany</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div id="menu2" class="tab-pane fade"><br>
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
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
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(D.D.S)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div id="menu3" class="container tab-pane fade"><br>
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Office Manager)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Office Manager)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Office Manager)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Office Manager)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Office Manager)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div id="menu4" class="container tab-pane fade"><br>
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/brittany.png') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>brittany</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(RDH)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div id="menu5" class="container tab-pane fade"><br>
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(DENTAL ASSISTANT)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
							   </div>
						   </div>
					   </div>
				   </div>
				   <div id="menu6" class="container tab-pane fade"><br>
					   <div class="doctor">
						   <div class="container">
							   <div class="row">
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Front Office)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member2.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Front Office)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member3.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Front Office)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
										   </div>
									   </div>
								   </div>
								   <div class="col-md-3 mar-b-40">
									   <div class="team">
										   <img class="img-fluid" src="{{ asset('images/team-member4.jpg') }}" alt="" />
										   <div class="team-info">
											   <div class="team-info-inner">
												   <h4>Dr. Richard Marx</h4>
												   <p>(Front Office)</p>
											   </div>
										   </div>
										   <div class="effect-doctor">
											   <a href="https://www.facebook.com/windycityfamilydental" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
											   <a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

											   <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
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
</section>
@endsection
