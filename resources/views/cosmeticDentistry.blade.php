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
                        <h1>Cosmetic Dentistry</h1>
                        <p>These days, there’s no reason you shouldn’t love the way your smile looks.</p>
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
                <h2 class="text-center text-uppercase font-bold faq-title">Cosmetic Dentistry</h2>                
            </div>
			<p>
                If you have ever wanted to improve your smile’s appearance, cosmetic dentistry might be right for you. Windy City Family Dental offers a number of cosmetic dental services to meet your individual needs and desires:
            </p>			
			<ul class="list_1">
				<li><a href="{{ asset('invisalign.html') }}">Invisalign®</a></li>
				<li><a href="{{ asset('porcelain-dental-veneers.html') }}">Porcelain Dental Veneers</a></li>
				<li><a href="{{ asset('teeth-whitening.html') }}">Teeth Whitening</a></li>
			</ul>
			<p>
                If you would like to learn more about cosmetic dentistry in Chiacgo, Illinois, we welcome you to contact our office today and schedule your next appointment with our experienced dentist.
            </p>
			<p>
                Cosmetic dentistry includes several dental treatments; the aim of each of these treatments is to enhance the beauty of your smile. Through cosmetic dentistry, we can help you achieve a more beautiful, inviting smile that boosts your self-esteem and allows you to smile with confidence.
            </p>
			<p>
                We may suggest cosmetic dentistry for any of our patients who would like to improve the beauty of their smile. Cosmetic dentistry might be the solution you need if your smile is flawed by imperfections such as:
            </p>
			<ul class="list_1">
				<li>Cracked, chipped, fractured, or broken teeth</li>
				<li>Gaps and spaces between teeth</li>
				<li>Discolored, yellowed, or stained teeth</li>
				<li>Slightly misaligned or uneven teeth</li>
				<li>One or more missing teeth</li>
				<li>Teeth that appear too long, too short, or too pointed</li>
				<li>Very worn teeth</li>
				<li>Misshapen teeth</li>
			</ul>
			<p>
                Our dentist will help you choose one or more of our high-quality cosmetic dental treatments based on your personal needs and desires. This individualized treatment plan will help you accomplish all of your goals for the smile of your dreams. We invite you to contact our friendly dental practice today to learn more about cosmetic dentistry and how we can improve your smile’s appearance. We look forward to helping you reach the attractive, healthy smile you deserve! 
            </p>
        </div>
    </div>
</section>
@endsection        
