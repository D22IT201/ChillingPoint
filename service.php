<?php include('db_connect.php'); ?>

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
		        	<h2>Our Services</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#">Our Services</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">

			<!-- Services -->

			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic pull-left"><i class="fa fa-cogs"></i></span>
					<h2 class="title classic">Our Services</h2>
				</div>
			</div>
     <!-- Features start -->
     <div class="gap-10"></div>
	<section id="service" class="service">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".10s">
					<div class="service-content">
						<span class="service-image"><img class="img-responsive" src="images/pages/service-1.jpg" alt="" /></span>
						<h3>Amusment Park</h3>
						<p>
							The perfect destination for friends and family. 
							With thrilling indoor and outdoor roller coasters, several of India's first thematic shows & attractions 
						</p>
					</div>
				</div><!--/ End first service -->

				<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s" >
					<div class="service-content">
						<span class="service-image"><img class="img-responsive" src="images/pages/service-2.jpg" alt="" /></span>
						<h3>Water Park</h3>
						<p>Feel the adrenaline rush as you twist, swirl and jerk in the craziest, meanest, 
							spine chilling and heart thumping rides at Water Park. Weak hearts stay away!</p>
					</div>
					
				</div><!--/ End Second features -->

				<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay="1.1s">
					<div class="service-content">
						<span class="service-image"><img class="img-responsive" src="images/pages/service-3.jpg" alt="" /></span>
						<h3>Resort</h3>
						<p>Resort, is conveniently located within touching distance 
							to prominent tourist attractions. 
							Our Resort is perfect destination for a blissful getaway. 
					</div>
				</div><!--/ End Third features -->

			</div><!-- Content Row end -->
		</div><!--/ Container end -->
	</section><!--/ Features end -->

	<!-- About tab start -->
	<section id="about" class="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 heading text-center">
					<span class="icon-pentagon wow bounceIn"><i class="fa fa-meh-o"></i></span>
					<h2 class="title2">Facilities Of Chilling Point
						<span class="title-desc">
							Stay & Enjoy
						</span>
					</h2>
				</div>
			</div> <!-- Title row end -->

			<div class="row">
				<div class="featured-tab clearfix">
					<ul class="nav nav-tabs nav-stacked col-md-3 col-sm-5">
					  	<li class="active">
							  <br>
					  		<a class="animated fadeIn" href="#tab_a" data-toggle="tab">
					  			<span class="tab-icon"><i class="fa fa-bank"></i></span>
					  			<div class="tab-info"><h3>AMUSMENT ATTRACT</h3></div>
					  		</a>
					  	</li>

						  <li>
							<a class="animated fadeIn" href="#tab_c" data-toggle="tab">
								<span class="tab-icon"><i class="fa fa-bank"></i></span>
								<div class="tab-info"><h3>WATER ATTRACT</h3></div>
							</a>
						</li>

					  	<li>
						  	<a class="animated fadeIn" href="#tab_b" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-database"></i></span>
					  			<div class="tab-info"><h3>PARK TIMINGS</h3></div>
						  	</a>
						</li>
		
						<li>
						  	<a class="animated fadeIn" href="#tab_d" data-toggle="tab">
						  		<span class="tab-icon"><i class="fa fa-language"></i></span>
					  			<div class="tab-info"><h3>TICKETS / PACKAGES</h3></div>	
						  	</a>
						</li>
						
					</ul>
					<div class="tab-content col-md-9 col-sm-7">
				        <div class="tab-pane active animated fadeInRight" id="tab_a">
				        	<!-- <img class="img-responsive pull-left" src="images/tab/featured-tab1.png" alt=""> -->
				            <h3>Our Amusment park has something for everyone</h3> 
				            
				            <ul class="check-list">
				            	<li><i class="fa fa-arrow-circle-right"></i>Unique attractions, for the the first time in India</li>
				            	<li><i class="fa fa-arrow-circle-right"></i> Indoor AC rides like Deep Space & Rajasaurus</li>
				            	<li><i class="fa fa-arrow-circle-right"></i> Thematic experiences like Mr. India & I for India</li>
								<li><i class="fa fa-arrow-circle-right"></i> Outdoor roller coasters & rides</li>
								<li><i class="fa fa-arrow-circle-right"></i> Restaurants & bars with multiple cuisines</li>
								<li><i class="fa fa-arrow-circle-right"></i> Shopping & lounge areas</li>
				            </ul>
				        </div>

						<div class="tab-pane animated fadeInLeft" id="tab_c">
				            <!-- <img class="img-responsive pull-right" src="images/tab/featured-tab2.png" alt=""> -->
				            <h3>Go With The Flow at Water Park</h3> 

							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Unique thrills like Loopy Woopy &Swirl Whirl in India</li>
				                <li><i class="fa fa-check"></i> Group and solo slides & racers </li>
				                <li><i class="fa fa-check"></i> Wave pool & lazy river </li>
				                <li><i class="fa fa-check"></i> Shopping & lounge areas </li>
				                <li><i class="fa fa-check"></i> Restaurants & bars</li>
				             </ul>
				        </div>

				        <div class="tab-pane animated fadeInLeft" id="tab_b">
				            <!-- <img class="img-responsive pull-right" src="images/tab/featured-tab2.png" alt=""> -->
				            <h3>PARK TIMINGS & CALENDARS</h3> 

							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Park timings and ride times are subject to change.</li>
				                <li><i class="fa fa-check"></i> We have undertaken a Green Initiative to conserve electricity and resources. </li>
				                <li><i class="fa fa-check"></i> Please check the specific ride operations timings at the Park entrance. </li>
				                <li><i class="fa fa-check"></i> View the  maintenance schedule and  attraction timings for the season. </li>
				                <li><i class="fa fa-check"></i> Timings are subject to change - always check at Admissions for up to date information.</li>
				             </ul>
				        </div>
				        
				        <div class="tab-pane animated fadeIn" id="tab_d">
				            <h3>Tickets / Packages</h3> 
							<ul class="check-list">
				                <li><i class="fa fa-check"></i> Enter your Transaction ID & Phone number used during time of transaction</li>
				                <li><i class="fa fa-check"></i> Select Preferred Date of Visit</li>
				                <li><i class="fa fa-check"></i> Click on Download & Email PDF to get confirmation email</li>
				                <li><i class="fa fa-check"></i> Present it at the park admission counter at the time of entry</li>
				                <li><i class="fa fa-check"></i> To know more, reach out to us on 022-62552929</li>
				             </ul>
				        </div>
					</div><!-- tab content -->
	    		</div><!-- Featured tab end -->
			</div><!-- Content row end -->
		</div><!-- Container end -->
    </section><!-- About end -->

	
</div>
</section>
</div>

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