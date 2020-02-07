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
						<h4>Lorem Ipsum convallis diam</h4>
						<p>Pellentesque convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
							pulvinar neque pharetra ac.</p>
						<p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. Cras a ornare elit. Nulla viverra pharetra sem, eget
							pulvinar neque pharetra ac.</p>
						<a href="#" class="blog-btn" data-toggle="modal" data-target="#myModal">Read More</a>
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
					<a href="contact.html">call us 5-367-123-4567</a>
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