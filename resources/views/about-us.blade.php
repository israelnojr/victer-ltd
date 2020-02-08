@extends('layouts.front.app')
@section('content')
<section class="banner-1">
	</section>
		<section class="banner_bottom py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">About Us</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			<div class="inner_sec_info_wthree_agile pt-4 mt-md-4">
				<div class="row help_full">
					<div class="col-md-6 banner_bottom_grid help">
						<img src="{{ asset('front/images/g1.jpg')}}" alt=" " class="img-fluid">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>Read What We Stand For !!!</h4>
						<p>We stand among the best Shipping/Clearing and Forwarding Agency businesses in Nigeria and are licensed by the Nigeria Custom Service.
							 We are committed to providing you with customized Services which would help you pursue your defined goal of “Just-in-time delivery and at best cost”.</p>
						
							 <p>Our consultation encompasses both import and export trade which spread across matters like tariffs, 
							insurance, and quotas, track shipments and work with clients on reducing duties owed.</p>

							<p>Our proven pedigree coupled with seasoned professionals with cognate experience in freight forwarding, logistics, shipping/clearing ensures cost effectiveness, 
								speedy clearance, on-time perfection of documentations, safe and delivery of consignment in the shortest possible time.</p>
							<p>Our strength that endears our esteem clients is our global alliance and cordial official relationship with the relevant agencies/authorities at the cargo airports, 
								which has given us a competitive edge and added value on behalf of our clients and hence ensures value for money.</p>
							<p>We are privileged to fast track shipments with customs authorities, devoid of delays and demurrage accruing on shipments.</p>
						
						
						
						
						
						
						<!-- <a href="#" class="blog-btn" data-toggle="modal" data-target="#myModal">Read More</a> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//ab-->
	<!-- distance -->
<section class="distance-w3 py-md-5">
		<div class="container py-4 mt-2">
			<div class="row">
				<div class="col-md-8 distance-agile-left">
					<h4 class="mt-2">The Safest Distance Between Two Points.</h4>
				</div>
				<div class="col-md-4 distance-agile-right">
					<a href="{{ route('contact')}}">call us +234-703-294-9204</a>
				</div>
			</div>
         </div>
</section>
<!-- //distance -->
	<!-- team -->
	<section class="team py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Our Team</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			<div class="row inner-sec-w3layouts-agileinfo pt-4 mt-md-4">
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="{{ asset('front/images/t1.jpg')}}" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>John Doe</h4>
							<h6>Lorem
								</h6><h6>
						</h6></div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="{{ asset('front/images/t2.jpg')}}" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Smith</h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="{{ asset('front/images/t3.jpg')}}" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Adam Lobster</h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 team-grids">
					<img src="{{ asset('front/images/t4.jpg')}}" class="img-fluid" alt="">
					<div class="team-info">
						<div class="caption">
							<h4>Chris </h4>
							<h6>Lorem</h6>
						</div>
						<div class="social-icons-section">
							<a class="fac" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
							<a class="twitter" href="#">
								<i class="fab fa-twitter"></i>
							</a>
							<a class="pinterest" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- //team -->



@endsection