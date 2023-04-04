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
		        	<h2>Booking</h2>
		        	<ul class="breadcrumb">
			            <li>Home</li>
			            <li><a href="#">Booking</a></li>
		          	</ul>
	          	</div>
          	</div><!-- Subpage title end -->
	</div><!-- Banner area end -->

	<!-- Main container start -->

	<section id="main-container">
		<div class="container">
			
			<!-- <div class="gap-10"></div> -->

			<div class="row">
				<div class="col-md-12">
					<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".5s">
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Amusment Park</h3>
							
						</div>
					</div><!--/ End first service -->

					<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Water Park</h3>
							
						</div>
						
					</div><!--/ End Second service -->

					<div class="col-md-4 col-sm-4 wow fadeInDown" data-wow-delay=".8s" >
						<div class="service-content text-center">
							<span class="service-icon icon-pentagon"><i class="fa fa-tachometer"></i></span>
							<h3>Resort</h3>
							
						</div>
						
					</div>
					
				</div>
			</div><!-- Content 1st row end -->

			<div class="row">
	    		<div class="col-md-12">
	    			<form id="contact-form" action="registerfire.php" method="post" role="form" name="frm">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Name</label>
								<input class="form-control" name="name" placeholder="" type="text" required>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Date</label>
									<input class="form-control" name="date" placeholder="" type="date" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email-Address</label>
									<input class="form-control" name="txtem" placeholder="" type="email" required>
							
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Contact-Number</label>
									<input class="form-control" name="txtcn" type="tel" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required>
								</div>
							</div>
						</div>
						<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Select Any Park/Resort Here</label>
										
										<select name="secque" class="form-control" required >
											<option>- Select Park/Resort from the list -</option>
											<option>-- Amusment Park --</option>
											<option>-- Water Park --</option>
											<option>-- Resort --</option>
											<!-- <option>-- Where is your birth place --</option>
											<option>-- What is your favourite place --</option> -->
										</select>
									</div>
								</div>	

								
								<div class="col-md-6">
									<div class="form-group">
										<label>Select Ride/Room Type Here</label>
										
										<select name="secque" class="form-control" required >
											<option>- Select A_ride from the list -</option>
											<option>-- DOUBLESHOT --</option>
											<option>-- BAYERN KURVE --</option>
											<option>-- EXTREME SWING --</option>
											<option>-- ROLLAR COASTER --</option>
											<option>-- BOUNTY TOWER --</option>
											<option>-- DISK 'O ZAMPERLA --</option>
											<option>-- SWING OUT --</option>
											<option>-- SPIN SPIDER --</option>
											<option>-- ROUND PRIDE --</option>
											<option>-- ROLL GILDER --</option>
										</select>
								</div>
							</div>
						</div>
					</div>
						<div class="text-center"><br>
							<button class="btn btn-primary solid blank" type="submit">Book Now!</button> 
						</div>
				
						</div>
					</form>
	    		</div>
	    	</div>

		</div><!--/ container end -->
	</section><!--/ Main container end -->
	

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