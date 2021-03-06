@extends('layouts.front.app')
@section('content')

	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>Import & Exportation</h3>
								<p class="text-warning" >We specialise in supplies of required essential commodities to a shipping vessel and its crew in terms of ship chandling, we provide the most effective services when any ship is anchored at the port.</p>
							</div>
						</div>
					</div>
				</li>


				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>Clearing & Forwarding</h3>
								<p class="text-warning" >We file entries electronically with Nigeria Customs and will ensure all other 
									government agency requirements are met, such as NAFDAC requirements on 
									food safety or SON requirements on perishables, Electronics, and other imports, preventing delays at the port when your goods arrive.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Auto Sales</h3>
								<p class="text-warning" >Victert Auto is a used car marketing company in Lagos Nigeria. We provides used car dealers, 
								importers and users around the world with most economical and convenient solutions of importing used vehicles from USA and Canada.</p>
								<p class="text-default" style="margin-top: -35px;" >Our clearing and forwarding department is our competitive advantage over others so that our customers can get their vehicles delivered quickly and safely.
								Next time you're looking for a used car or truck give us a call and we will help you locate the vehicle that is right for you at a great price.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main">
					
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-ship" aria-hidden="true"></span>
								<h3 class="mt-3">Import & Export</h3>
								<p class="mt-3 mb-3">We specialise in supplies of required essential commodities to a shipping vessel and its crew in terms of ship chandling, we provide the most effective services when any ship is anchored at the port.</p>
								
								<!-- <div class="read-btn">
									<a href="about.html">Learn more</a>
								</div> -->
							</div>
						</div>
						<div class="col-md-4 banner-grid2">
							<div class="banner-subg1">
							<span class="fa fa-car" aria-hidden="true"></span>
								<h3 class="mt-3">Auto Sales</h3>
								<p class="mt-3 mb-3">We have a nice selection of used cars and trucks such as used Chevy, Ford, Dodge, Honda, Toyota, Lexus, or Mercedes. We have access to all makes and models, we also offer special packages and discounts to the dealers, along with marketing solutions to give their business a boost. </p>
								
								<!-- <div class="read-btn">
									<a href="about.html">Learn more</a>
								</div> -->
							</div>
						</div>
						<div class="col-md-4 banner-btmg">
							<div class="banner-btmg1">
								<!-- <div class="form-text">
									<h3 class="text-center">Get a Free Quote</h3>
									<p class="text-center">Or call one of our customer service</p>
								</div> -->
								<form action="#" method="post" class="banner_form">
									<div class="sec-left">
										<label class="contact-form-text">Full Name</label>
										<input placeholder="Your name" name="name" type="text" required="">
									</div>

									<div class="sec-left">
										<label class="contact-form-text">Email</label>
										<input placeholder="Your Email" name="email" type="email" required="">
									</div>
									<div class="sec-left">
										<label class="contact-form-text">Subject</label>
										<select name="services">
											<option value="">Choose services</option>
											<option value="Import & Export">Import & Export</option>
											<option value="Auto Sales">Auto Sales</option>
											<option value="Clearing & Forwarding">Clearing & Forwarding</option>
											<option value="protective Agency">protective Agency</option>

										</select>
									</div>
									<div class="sec-right">
										<label class="contact-form-text">Message</label>
										<textarea placeholder="want you want us to do" name="message" type="text" required="" 
                                        style="margin-top: 0px; margin-bottom: 0px; width: 100%;">
                                        </textarea>
									</div>
									<input type="submit" value="Get a Quote">
								</form>
							</div>
					</div>
				</div>
			</div>
		</section>
		<!-- //banner bottom -->
		<section class="banner_bottom">
		<div class="container mt-2">
			<div class="inner_sec_info_wthree_agile py-5">
				<div class="row help_full py-sm-4">

					<div class="col-md-6 pt-lg-5 mt-lg-5 banner_bottom_left">
						<h4>Specialtymoves? We’re a company up to the challenge!</h4>
						<p class="mb-3"><strong>Victert Integrated Services Limited</strong> is a world-class provider of innovative logistics and supply-chain service and solutions. 
                        Victert started operation in 2017 and we currently have a cardinal partner at major sea and airports across the world.

						</p>
						<p class="mb-3"><strong>Victert Integrated Services Limited</strong>  is known for her quality services and extensive network that operates in over 200 countries, 
                        incorporated by the Corperate Affairs Commission (CAC) of Nigeria, a registered member of the Council of Registered Freight Forwarders of 
                        Nigeria (CRFFN) and Associations of Nigerian Licensed Clearing Agent (ANCLA) which gives her the right to deliver courier, cargo and 
                        offer other shipping and logistics services.

						</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="{{route('about')}}" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>


					</div>

					<div class="col-md-6 banner_bottom_grid help">
						<img src="{{ asset('front/images/2.png')}}" alt=" " class="img-fluid">
					</div>
				</div>
			</div>
		</div>
	</section>
		<!-- testimonials -->
	<section class="testimonials py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3 text-white">Customer Says</h3>
				<p class="tit text-center mx-auto text-white"> Victert is admired and appreciated by our esteemed clients for its international standards, and professionalism. </p>
			<div class="w3_agileits_testimonial_grids pt-4 mt-md-4">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Ema Wayans <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="{{ asset('front/images/ts1.jpg')}}" alt=" " class="img-responsive" />
									
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mark Rosy <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="{{ asset('front/images/ts2.jpg')}}" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_agileits_testimonial_grid">
									<div class="test-bg-w3ls">
										<h4>Mario Andretti <span>Lorem Ipsum</span></h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
										dolore eu fugiat nulla pariatur.</p>
									</div>
									<img src="{{ asset('front/images/ts3.jpg')}}" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
			</div>
		</div>
	</section>
<!-- //testimonials -->
<!-- smooth-shipping -->
	<!-- <section class="wthree-row w3-about py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Smooth Shipping.</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
              <div class="card-deck pt-4 mt-md-4">
				  <div class="card">
					<img src="{{asset('front/images/g1.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Moving Worldwide</h5>
					  <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="{{asset('front/images/g2.jpg')}}" class="img-fluid" alt="Card image cap">
					<div class="card-body w3ls-card">
					  <h5 class="card-title">Every day is moving day</h5>
					   <p class="card-text mb-3 ">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
						<div class="ab_button">
							<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Read More </a>
						</div>
					</div>
				  </div>
				  <div class="card">
					<img src="{{asset('front/images/g3.jpg')}}" class="img-fluid" alt="Card image cap">
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
    </section> -->
<!-- //smooth-shipping -->
<!-- distance -->
<section class="distance-w3 py-md-5">
		<div class="container py-4 mt-2">
			<div class="row">
				<div class="col-md-8 distance-agile-left">
					<h4 class="mt-2">The Safest Distance Between Two Points.</h4>
				</div>
				<div class="col-md-4 distance-agile-right">
				<a href="#" role="button" data-toggle="modal" data-target="#customerTestimony">Kindly Testify</a>
				</div>
			</div>
         </div>
</section>
<!-- //distance -->
<!-- stats -->
<section class="stats py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Our Stats</h3>
			<p class="tit text-center mx-auto">We owes our presence in the heart of major Corporate and MNC's who have immense faith in our customized 
				tailor made working & without their continued patronage we would not have been where we are today. Till now we tie-up with 400 companies. 
			</p>
		<div class="row inner_w3l_agile_grids-1 pt-4 mt-md-4">
			<div class="col-sm-4 w3layouts_stats_left w3_counter_grid">
				<p class="counter">400 </p>
				<h3>Satisfied Clients</h3>
				<h6>Pure satisfaction</h6>
			</div>
			<div class="col-sm-4 w3layouts_stats_left w3_counter_grid1">
			
				<p class="counter">14,345</p>
				<h3>Successful Shippings</h3>
				<h6>Shipping</h6>
			</div>
			<div class="col-sm-4 w3layouts_stats_left w3_counter_grid2">
			
				<p class="counter">6</p>
				<h3>Branches Worldwide</h3>
				<h6>Highest level of credibility</h6>
			</div>
		</div>
   </div>	
</section>
<!-- //stats -->
@endsection
