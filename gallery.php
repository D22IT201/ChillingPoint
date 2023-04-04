<!DOCTYPE html>
<html lang="en">
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
    <title>Chilling Point</title>
    <meta name="description" content="">	
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Favicons
	================================================== -->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="css/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

	<div class="body-inner">
<?php include('header.php')?>

	<div id="banner-area">
		<img src="images/banner/banner2.jpg" alt ="" />
		<div class="parallax-overlay"></div>
			<!-- Subpage title start -->
			<div class="banner-title-content">
	        	<div class="text-center">
		        	<h2>Gallery</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#">Gallery</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->


	<!-- Portfolio start -->
	<section id="portfolio" class="portfolio portfolio-box">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn"><i class="fa fa-suitcase"></i></span>
					<h2 class="title2">Our Gallery
						<span class="title-desc">Have A Look</span>
                    </h2>
				</div>
			</div> <!-- Title row end -->

			<!--Isotope filter start -->

			<div class="row text-center">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Amusment Park</a></li>
						<li><a href="#" data-filter=".development">Water Park</a></li>
						<li><a href="#" data-filter=".joomla">Resort</a></li>
					</ul>
				</div>
			</div><!-- Isotope filter end -->
			
			<div class="row">
				<div id="isotope" class="isotope">

					<!-- a1 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR1.jpg" alt="">
								<figcaption>
									
									<h3>Doubleshot</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->
					
					<!-- w1 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR1.jpg" alt="">
								<figcaption>
									<h3>Bumper Boats</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->


					<!-- a2 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR2.jpg" alt="">
								<figcaption>
									<h3>Bayern Kurve</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a02">
										<i class="fa fa-search"></i>
									</a>
								<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r1 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR1.jpg" alt="">
								<figcaption>
									<h3>Beach View</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r01">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r01"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- w2 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR2.jpg" alt="">
								<figcaption>
									<h3>Down Fall</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w02">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a3 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR3.jpg" alt="">
								<figcaption>
									<h3>Extreme Swing</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r2 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR2.jpg" alt="">
								<figcaption>
									<h3>Couple Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r02">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r02"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a4 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR4.jpg" alt="">
								<figcaption>
									<h3>Rollar Coaster</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>
					
					<!-- w3 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR3.jpg" alt="">
								<figcaption>
									<h3>Fall Down</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a5 web Design == Amusment Park  Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR5.jpg" alt="">
								<figcaption>
									<h3>Bounty Tower</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- w4 Development == Water Park  -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR4.jpg" alt="">
								<figcaption>
									<h3>Pirate Falls</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->


					<!-- a6 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR6.jpg" alt="">
								<figcaption>
									<h3>Disk 'O Zamperla</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r3 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR3.jpg" alt="">
								<figcaption>
									<h3>Deluxe Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r03">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r03"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- r4 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR4.jpg" alt="">
								<figcaption>
									<h3>Family Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r04">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r04"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->
					
					<!-- w5 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR5.jpg" alt="">
								<figcaption>
									<h3>Amazing Ride</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- r5 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR5.jpg" alt="">
								<figcaption>
									<h3>Friends Room</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r05">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r05"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a7 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR7.jpg" alt="">
								<figcaption>
									<h3>Swing Out</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a07">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a07"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- a8 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR8.jpg" alt="">
								<figcaption>
									<h3>Spin Spider</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a08">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a08"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- r6 joomla == RESORT -->
					<div class="col-sm-3 joomla isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/RR6.jpg" alt="">
								<figcaption>
									<h3>Single Bedroom</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=r06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=r06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- w6 Development == Water Park -->
					<div class="col-sm-3 development isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/WR6.jpg" alt="">
								<figcaption>
									<h3>View</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=w06">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=w06"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>					
							</figure>
						</div>
					</div><!-- Isotope item end -->

					<!-- a9 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR9.jpg" alt="">
								<figcaption>
									<h3>Round Pride</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a09">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a09"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>

					<!-- a10 web Design == Amusment Park -->
					<div class="col-sm-3 web-design isotope-item">
						<div class="grid">
							<figure class="effect-oscar">
								<img src="gallery/AR10.jpg" alt="">
								<figcaption>
									<h3>Roll Gilder</h3>
									<a class="link icon-pentagon" href="view_ride.php?code=a10">
										<i class="fa fa-search"></i>
									</a>
									<a class="view icon-pentagon" data-rel="prettyPhoto" href="cart.php?code=a10"><i class="fa fa-shopping-cart"></i></a>            
								</figcaption>
							</figure>
						</div>
					</div>
				</div><!-- Isotope content end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
	</section><!-- Portfolio end -->



	<?php include('footer.php')?>

		<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Style Switcher -->
	<script type="text/javascript" src="js/style-switcher.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<!-- PrettyPhoto -->
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<!-- Bxslider -->
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="js/cd-hero.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/ini.isotope.js"></script>
	<!-- Wow Animation -->
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- SmoothScroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Eeasing -->
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>

	<!-- Google Map API Key Source -->
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
	<script type="text/javascript" src="js/gmap3.js"></script>
	
	<script type="text/javascript">

		$(function () {
	       $('#map')
	         .gmap3({
	           address:"14600 Goldenwest St #101A, Westminster, California 92683",
	           zoom: 17,
	           mapTypeId : google.maps.MapTypeId.ROADMAP,
	           scrollwheel: false
	         })
	         .marker(function (map) {
	           return {
	             position: map.getCenter(),
	             icon: 'http://themewinter.com/html/marker.png'
	           };
	         });
	     });

	</script>
	
	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	</div><!-- Body inner end -->
</body>
</html>