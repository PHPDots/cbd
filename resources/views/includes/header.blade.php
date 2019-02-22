<header>
	<div id="myHeader">
		<nav class="navbar static-top">
			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img class="img-fluid" src="{{ asset('images/Windy-City-Family-Dental-logo.png') }}" alt="" />
				</a>
				<div class="btn-box d-flex">
					<a class="theme-btn" href="#" data-toggle="modal" data-target="#mkappoint">
						<i class="fa fa-calendar btn-icon"></i>Appointment
						<span>Feel Free to ask</span>
					</a>
					<a class="theme-btn" href="tel:3122368065">
						<i class="fa fa-phone btn-icon"></i>(312) 236-8065<span>
						Feel Free to Contact</span>
					</a>
				</div>
				<div class="menu">
					<span></span>
				</div>
				<nav id="nav">
					<ul id="category-tabs" class="main">
						<li><a href="{{ asset('/') }}">Home</a></li>
						<li>
							<a href="javascript:void(0)" ><i class="fa fa-plus"></i>Our Team</a>
							<ul>
								<li><a href="{{ asset('our-team.html') }}">Meet Our Team</a></li>
								<li><a href="{{ asset('office-tour.html') }}">Office Tour</a></li>
							</ul>
						</li>
						<li>
							<a href="javascript:void" ><i class="fa fa-plus"></i>Services</a>
							<ul>
								<li>
									<a href="{{ asset('general-family-dentistry.html') }}">
									General &amp; Family Dentistry
								</a>
								</li>
								<li>
									<a href="{{ asset('cosmetic-dentistry.html') }}">Cosmetic Dentistry</a>
								</li>
								<li>
									<a href="{{ asset('restorative-dentistry.html') }}">
										Restorative Dentistry
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="{{ asset('faq.html') }}">FAQs</a>
						</li>
						<li>
							<a href="{{ asset('contact.html') }}">
								Contact
							</a>
						</li>
					</ul>
					<div class="mobile-menu-bottom">
						<ul id="menu-secondary" class="main">
							<li class="menu-item">
								<a href="https://www.facebook.com/windycityfamilydental" target="_blank">Facebook</a>
							</li>
							<li class="menu-item">
								<a href="https://twitter.com/DentalWindy" target="_blank">Twitter</a>
							</li>
							<li class="menu-item"> <a href="#">Linkedin</a></li>
						</ul>
						<div class="menu-footer">
							<p>© {{ date('Y') }} Windy City Family Dental. All rights reserved.</p>
						</div>
					</div>
				</nav>
				<div class="overlay"></div>
			</div>
		</nav>
	</div>
</header>
