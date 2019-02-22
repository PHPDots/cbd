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
                        <h1>Contact Us</h1>
                        <p>"The first step towards a beautiful, healthy smile is to schedule an appointment.Please contact our office by phone or complete the appointment request form below."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">

                    <h2 class="sub-title font-bold">
                    	<span>Appointment form</span>Make an Appointment
                    </h2>

                    <div class="appoint-form">
                        <form>
                            <div class="row">
                                <div class="col-md-6 mar-b-30">
                                    <input class="form-control" placeholder="Name" type="text" />
                                </div>
                                <div class="col-md-6 mar-b-30">
                                    <input class="form-control" placeholder="Email" type="text" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mar-b-30">
                                    <input class="form-control" placeholder="Phone Number" type="text" />
                                </div>
                                <div class="col-md-6 mar-b-30">
                                    <input class="form-control" placeholder="Date" type="text" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mar-b-30">
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="theme-btn" href="#"><i class="btn-img"></i>Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="appoint-form contact-appoint-form">
                        <h2 class="text-center txt-white font-bold mar-b-40">Appointment</h2>
                        <form>
                            <div class="row">
                                <div class="col-md-12 mar-b-30">
                                    <input class="form-control" placeholder="Name" type="text">
                                </div>
                                <div class="col-md-12 mar-b-30">
                                    <input class="form-control" placeholder="Email" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mar-b-30">
                                    <input class="form-control" placeholder="Phone Number" type="text">
                                </div>
                                <div class="col-md-12 mar-b-30">
                                    <input class="form-control" placeholder="Date" type="text">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mar-b-30">
                                    <textarea class="form-control" rows="4" id="comment" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="d-flex">
                                <a class="theme-btn" href="#"><i class="btn-img"></i>Submit</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-detail-section">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <a class="contact-detail-link" href="#">30 N Michigan Ave</a>
                        <p>#622 Chicago, IL 60602</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-detail-section">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a class="contact-detail-link" href="tel:(312) 236-8065">(312) 236-8065</a>
                        <p>Mon-Fri 8:30am - 9:30pm</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="contact-detail-section">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <a class="contact-detail-link" href="mailto:contact@company.com">contact@ChicagosBestDental.com</a>
                        <p>24/7 online help support</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map-section mar-b-60">
    <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.4568174875008!2d-87.62709368505584!3d41.88303177308543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2ca5b44880c3%3A0x235e2369fccd006f!2s30+N+Michigan+Ave+%23622%2C+Chicago%2C+IL+60602%2C+USA!5e0!3m2!1sen!2sin!4v1550124085181" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
@endsection


@section('scripts')
@endsection
