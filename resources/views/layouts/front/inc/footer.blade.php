	<!-- footer -->
    <footer>
	<section class="footer py-md-5">
		<div class="container py-4 mt-2" style="height: 433px;">
		<div class="row footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="{{('/')}}">  {{config('app.name')}}</a></h2>
				<p class="mb-3 mt-3">{{config('app.name')}} is admired and appreciated by our esteemed clients for its 
                        international standards, and professionalism.</p>
				<ul class="social-nav footer-social social two">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-pinterest" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
			
					<div class="col-md-2 sign-gd">
						<h4>Useful Links</h4>
						<ul>
							<li><a href="{{('/')}}">Home</a></li>
							<li><a href="{{ route('about')}}">About</a></li>
							<li><a href="{{ route('services')}}">Services</a></li>
							<li><a href="{{ route('contact')}}">Contact</a></li>
						</ul>
					</div>
					<!-- <div class="col-md-4 sign-gd flickr-post">
						<h4>Instagram</span></h4>
						<ul>
							<li><a href="#"><img src="{{ asset('front/images/g1.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g2.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g3.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g2.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g1.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g3.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g2.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g3.jpg')}}" alt=" " class="img-fluid" /></a></li>
							<li><a href="#"><img src="{{ asset('front/images/g1.jpg')}}" alt=" " class="img-fluid" /></a></li>
						</ul>
					</div> -->
				<div class="col-md-3 sign-gd-two">
                    <h4>Contact Information</h4>
                    <div class="address">
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Phone Number</h6>
								<p>+234-703-294-9204, 708-115-1711</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Email Address</h6>
                                <p>Email :<a href="mailto:victertokoh@gmail.com"> victertokoh@gmail.com</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        <div class="address-grid">
                            <div class="address-left">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="address-right">
                                <h6>Head Office</h6>
                                <p>Ground Floor Scorpion Block Eliganza Plaza, Apapa, Lagos Nigeria.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 sign-gd flickr-post">
                    <h4></span></h4>
                    <img src="{{('img/map.png')}}" alt="" class="map">
                </div>
		</div>
	</div>
	</section>
	<p class="copy-right py-3">&copy 2018  {{config('app.name')}}. All rights reserved | Design by <a href="http://twitter.com/juisdev">JuisDev</a></p>
	<!-- //footer -->
</footer>