@extends('layouts.master')

@section('content')
<section class="home_slider our-team-slide" id="banner">
	<div class="video_div">
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
					 	<h1>General &amp; Family Dentistry</h1>
					 	<p>No matter how old you are, preventive dental care is essential to keep your smile white and healthy for your entire life. </p>
				 	</div>
			 	</div>
		 	</div>
		</div>
	</div>
</section>

<section class="faq-main-section">
	<div class="faq-main-inner">
		<div class="container">
			<div class="page-title d-block mar-b-60">
				<h2 class="text-center text-uppercase font-bold faq-title">General &amp; Family Dentistry</h2>
		 	</div>
			<p>At Windy City Family Dental, we enjoy caring for patients of all ages and we are happy to provide dentistry for the whole family. We are is pleased to provide high-quality, personal care for each of our patients. We invite you to contact us today for more information about general and family dentistry in Chiacgo, Illinois, and to schedule an appointment with our dentist.</p>

			<ul class="list_1">
				<li><a href="{{ asset('dental-exams-cleanings.html') }}">Dental Exams &amp; Cleanings</a></li>
				<li><a href="{{ asset('dental-hygiene.html') }}">Dental Hygiene</a></li>
				<li><a href="{{ asset('dental-x-rays.html') }}">Dental X-Rays</a></li>
				<li><a href="{{ asset('periodontal-treatment.html') }}">Periodontal Treatment</a></li>
				<li><a href="{{ asset('preventive-care.html') }}">Preventive Care</a></li>
			</ul>
			<p>General and family dentistry encompasses a number of dental treatments that are aimed at helping you achieve and maintain optimal oral health for a lifetime. Whether you are bringing your child for a simple dental checkup or you are in need of a more complex restorative procedure like root canal treatment, we are here to care for your family’s smiles. Our experienced dentist is pleased to provide comprehensive general and family dentistry to meet all of your dental needs and goals for a healthy, beautiful smile. </p>
			<p>We encourage all of our patients to visit us at least once every six months. During these routine appointments, we will provide a thorough dental cleaning and exam to make sure that your smile is in good health. Depending on your individual dental needs, you may need to come to our office more often. If you notice any type of dental pain or damage, or if you experience a dental emergency, we urge you to contact us as soon as possible to receive the high-quality dental care you need. To learn more about our dental services and to schedule your family’s next visit to our friendly office, we welcome you to contact us today. We are eager to care for you! </p>
		</div>
	</div>
</section>
@endsection
