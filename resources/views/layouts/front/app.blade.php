
<!DOCTYPE html>
<html lang="en">

<head>
	<title> {{config('app.name')}} a Shipping, clearing and forwarding company | Base :: Lagos Nigeria</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Shipping, clearing and forwarding agent,"/>
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="{{ asset('front/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="{{ asset('front/css/JiSlider.css')}}" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="{{ asset('front/css/flexslider.css')}}" type="text/css" media="screen" property="" />
	 <link href="{{ asset('front/css/font-awesome.css')}}" rel="stylesheet">
	<link href="{{ asset('front/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />

	<link href="//fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

</head>

<body>
    <section class="w3layouts-header py-2">
		<div class="container">
            @include('layouts.front.inc.header')
            @yield('content')
            @include('layouts.front.inc.footer')

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"> {{config('app.name')}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                    <div class="agileits-w3layouts-info">
                                        <img src="{{ asset('front/images/g1.jpg')}}" class="img-fluid" alt="" />
                                        <p>{{config('app.name')}} is admired and appreciated by our esteemed clients for its 
                                        international standard professionalism, prompt, hassle-free, on-time door-to-door services and excellent customer 
                                        support around the world. Headed by highly qualified, experienced and reputed personnel, {{config('app.name')}} is renowned 
                                        for its world -wide network of alliances that allows faster connections to the rest of the world, as well 
                                        as superior control-mechanism. This enables delivery of a wide array of products in excellent condition to our valued customers. </p>
                                    </div>
                                </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <a href="{{ route('about')}}" type="button" class="btn btn-primary">Read More</a>
                    </div>
                    </div>
                </div>
            </div>
            <!-- //Modal -->

	<!-- js -->
	<script src="{{ asset('front/js/jquery-2.2.3.min.js')}}"></script>
	<!-- //js-->
	<!--banner-slider-->
	<script src="{{ asset('front/js/JiSlider.js')}}"></script>
	<script> 
		$(window).load(function () {
			$('#JiSlider').JiSlider({
				color: '#fff',
				start: 1,
				reverse: false
			}).addClass('ff')
		})
	</script>
	<!-- //banner-slider -->
	<!-- flexSlider -->
					<script defer src="{{ asset('front/js/jquery.flexslider.js')}}"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->

	<!-- start-smooth-scrolling -->
	<script  src="{{ asset('front/js/move-top.js')}}"></script>
	<script  src="{{ asset('front/js/easing.js')}}"></script>
	<script> 
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	<!-- stats -->
	<script src="{{ asset('front/js/jquery.waypoints.min.js')}}"></script>
	<script src="{{ asset('front/js/jquery.countup.js')}}"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->

	<!-- smooth-scrolling-of-move-up -->
	<script> 
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<script  src="{{ asset('front/js/SmoothScroll.min.js')}}"></script>
	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	 <script src="{{ asset('front/js/bootstrap.js')}}"></script>
</body>

</html>