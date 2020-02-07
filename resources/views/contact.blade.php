@extends('layouts.front.app')
@section('content')
<section class="banner-1">
	</section>
	<!-- contact -->
	<div class="w3ls-section banner-single py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Contact Us</h3>
			<p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p>
			<div class="row about-inner-main pt-4 mt-md-4">
				<div class="col-md-6 contact-left">
					<div class="agile-contact-top">
						<h4>address </h4>
						<p>1234k Avenue,Block-4,New York City.</p>
					</div>
					<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387193.3060153584!2d-74.2598711799434!3d40.69714940555201!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1510842846108"
						    style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6 w3layouts-reg-form contact-form-row-agileinfo">
					<h4 class="form-con-txt">send us a mail</h4>
					<form action="#" method="post" class="banner_form contact-inner-form">
						<div class="contact-form-left contact-field1">
							<div class="sec-left">
								<label class="contact-form-text">Name</label>
								<input placeholder="your name " name="first name" type="text" required="">
							</div>
							<div class="sec-right">
								<label class="contact-form-text">Email</label>
								<input placeholder="xxx@xx.com " name="first name" type="email" required="">
							</div>
						</div>
						<div class="contact-form-right contact-field2">
							<input type="submit" value="send message">
						</div>
						<div class="clearfix"></div>
						<div class="form-tx contact-field3">
							<label class="contact-form-text">Address</label>
							<textarea placeholder="your address" required=""></textarea>
						</div>
					</form>
				</div>
			
			</div>
		</div>
	</div>
	<!-- contact -->

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
@endsection