<!-- Make an appointment Modal -->
<div class="modal make_appointment fade-scale" id="mkappoint">
	<div class="modal-dialog">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h3 class="modal-title">Make an appointment</h3>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<p>If you have any questions about our dental services, office hours, accepted dental insurance plans, or payment options – or if you have compliments or concerns about your dental experience – please contact us at (312) 236-8065 or submit the form below.</p>

				{!! Form::open(['route' => 'submit-contact', 'files' => true,'class' => 'submit-contact']) !!}
					<div class="form-group">
				        {!! 
				        	Form::text('name',null,['class' => 'form-control', "placeholder" => "Your Name"]) 
				        !!}						
					</div>
					<div class="form-group">
				        {!! 
				        	Form::text('email',null,['class' => 'form-control', "placeholder" => "Your Email"]) 
				        !!}							        						
					</div>
					<div class="form-group">
				        {!! 
				        	Form::textarea('message',null,['class' => 'form-control', "placeholder" => "Your Message","rows" => 4]) 
				        !!}						
					</div>
					<input type="hidden" name="page" value="home" />
					<button type="submit" class="theme-btn"><i class="btn-img"></i>Send</button>				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="footer-hero"> <img src="{{ asset('images/footer-hero.svg') }}" alt="" width="100%"/> </div>
	<div class="footer-top">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="footer-logo"> 
					    <img class="img-fluid" src="{{ asset('images/Windy-City-Family-Dental-logo.png') }}" alt="" />
					    
						<p>When you’re ready to improve the health and beauty of your smile, please feel free to contact our Downtown Chicago dental office to schedule an in-depth evaluation with our doctors. You’ll learn all the ways you can keep your teeth looking and feeling their best for a lifetime. Call today!</p>
					</div>
				</div>
				<div class="col-md-3">
					<h4 class="footer-title">Popular Pages</h4>
					<div class="footer-menu">
						<ul>
							<li><a href="{{ url('/') }}">Home</a></li>
							<li><a href="{{ url('our-team.html') }}">Our Team</a></li>
							<li><a href="{{ url('office-tour.html') }}">Office Tour</a></li>
							<li><a href="{{ url('faq.html') }}">FAQs</a></li>
							<li><a href="{{ url('contact.html') }}">Contact Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<h4 class="footer-title">Contact Information</h4>
					<div class="footer-contact">
						<ul>
							<li>
								<a href="#">
									<b>Address:</b> 30 N Michigan Ave #622
									Chicago, IL 60602
								</a>
							</li>
							<li><a href="tel:3122368065"><b>Phone:</b> (312) 236-8065</a></li>
							<li><a href="mailto:contact@chicagokidds.com"><b>Email:</b> contact@ChicagosBestDental.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<h4 class="footer-title">Achievement</h4>
					<div class="footer-social">
						<ul>
							<li>
								<a href="https://www.facebook.com/windycityfamilydental/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
								</a>
							</li>
							<li>
								<a href="https://twitter.com/DentalWindy" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copy-right">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="footer-privacy">
						<ul>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-7">
					<div class="copy-right-text">
						Windy City Family Dental &copy; {{ date('Y') }} | All Rights Reserved
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
