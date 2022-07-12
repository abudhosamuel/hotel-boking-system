<?php
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);

include('connection.php');
extract($_REQUEST);
if (isset($send)) {
	mysqli_query($con, "insert into feedback values('','$n','$e','$mob','$msg')");
	$msg = "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>

<html>

<head>
	<title>Trinity Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style2.css">
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">
				<img src="images/logo1.png" class="logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="Aboutus.php" class="nav-link">Aboutus</a></li>
					<li class="nav-item active"><a href="restaurant.php" class="nav-link">Services</a></li>
					<li class="nav-item"><a href="attraction.php" class="nav-link">Attractions</a></li>
					<?php
					if ($_SESSION['create_account_logged_in'] != "") {
					?>
						<li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="nav-item"><a href="profile.php">Profile</a></li>
								<li class="nav-item"><a href="order.php">Booking Status</a></li>
								<li class="nav-item"><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					<?PHP } else {
					?>
						<li class="nav-item"><a href="Login.php" title="login" class="nav-link">&nbsp;&nbsp;Login</a></li>
					<?php
					} ?>


				</ul>
			</div>
		</div>

	</nav>

	<!-- END nav -->
	<div class="hero-wrap" style="background-image: url('images/images/bg_1.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
					<div class="text">
						<p class="breadcrumbs mb-2"><span class="mr-2"><a href="index.html">Home</a></span> <span>Restaurant</span></p>
						<h1 class="mb-4 bread">Restaurant</h1>
					</div>
				</div>
			</div>
		</div>
	</div>

	<section class="ftco-section ftco-menu" style="background-image: url(images/images/restaurant-pattern.jpg);">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Restaurant</span>
					<h2>Restaurant</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(images/images/menu-1.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Ugali and Beef Stew </span></h3>
								<span class="price price-left">Ksh1200.00</span>
							</div>
							<div class="d-block">
								<p>Ugali, vegetebles on the side, beef stew, with vanilla milkshake</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(images/images/menu-2.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Mashed Potatoes with Chicken stew</span></h3>
								<span class="price price-left">Ksh2900.00</span>
							</div>
							<div class="d-block">
								<p>Mashed Potatoes, chicken, with fruit salad</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(images/images/menu-3.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Grilled Beef with potatoes</span></h3>
								<span class="price price-left">Ksh2000.00</span>
							</div>
							<div class="d-block">
								<p>Grilled Beef, with rice and beef steew, marinated potatoes on the side</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img order-md-last" style="background-image: url(images/images/menu-4.jpg);"></div>
						<div class="desc pr-3 text-md-right">
							<div class="d-md-flex text align-items-center">
								<h3 class="order-md-last heading-left"><span>Burgers</span></h3>
								<span class="price price-left">Ksh1000.00</span>
							</div>
							<div class="d-block">
								<p>Patties, Lettuce, Tomatoes, ketchup, cheese, pickles.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/images/menu-5.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Lasagne</span></h3>
								<span class="price">Kshs4991</span>
							</div>
							<div class="d-block">
								<p>Made with an Italian chef and is glutten free</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/images/menu-6.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Ultimate Overload</span></h3>
								<span class="price">Ksh2000.00</span>
							</div>
							<div class="d-block">
								<p>Consists of appetizer, main course and dessert.</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/images/menu-7.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Full Breakfast</span></h3>
								<span class="price">Ksh3000.00</span>
							</div>
							<div class="d-block">
								<p>3 slices of bread, bacon, eggs, fruit salad and green tea</p>
							</div>
						</div>
					</div>
					<div class="pricing-entry d-flex ftco-animate">
						<div class="img" style="background-image: url(images/images/menu-8.jpg);"></div>
						<div class="desc pl-3">
							<div class="d-md-flex text align-items-center">
								<h3><span>Ham &amp; Pineapple</span></h3>
								<span class="price">Ksh1000.00</span>
							</div>
							<div class="d-block">
								<p>Its a Hotel specialty including toast bread with Ham and pineapple juice</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-bg-dark ftco-section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Trinity</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
							<li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Useful Links</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Blog</a></li>
							<li><a href="#" class="py-2 d-block">Rooms</a></li>
							<li><a href="#" class="py-2 d-block">Amenities</a></li>
							<li><a href="#" class="py-2 d-block">Gift Card</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Privacy</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Career</a></li>
							<li><a href="#" class="py-2 d-block">About Us</a></li>
							<li><a href="#" class="py-2 d-block">Contact Us</a></li>
							<li><a href="#" class="py-2 d-block">Services</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fort Jesus, Old Town, Mombasa, Kenya</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 579882302</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@trinityhotel.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- // <script src="js/jquery.timepicker.min.js"></script> -->
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>