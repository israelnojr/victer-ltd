@extends('layouts.front.app')
@section('content')
<section class="banner-1">
	</section>
			<!-- banner bottom -->
		<section class="ser-btm py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Services</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
				<div class="row banner-bottom-main pt-4 mt-md-4">
					
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-globe" aria-hidden="true"></span>
								<h3 class="mt-3">Worldwide Customers</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.consectetur adipiscing elit</p>
								
								<div class="read-btn">
									<a href="about.html">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-user" aria-hidden="true"></span>
								<h3 class="mt-3">Personal Manager</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.consectetur adipiscing elit</p>
								
								<div class="read-btn">
									<a href="about.html">Learn more</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-globe" aria-hidden="true"></span>
								<h3 class="mt-3">Worldwide Customers</h3>
								<p class="mt-3 mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit estibulum nibh urna scing.consectetur adipiscing elit</p>
								
								<div class="read-btn">
									<a href="about.html">Learn more</a>
								</div>
							</div>
						</div>
				</div>
			</div>
		</section>
		<!-- //banner bottom -->

<!-- smooth-shipping -->
	<section class="wthree-row w3-about py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Smooth Shipping.</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
					<img src="{{ asset('front/images/g1.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Moving Worldwide</h5>
					  <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="{{ asset('front/images/g2.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Every day is moving day</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="{{ asset('front/images/g3.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Third Party Services</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				</div>
            </div>
        </section>
<!-- //smooth-shipping -->
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



@endsection