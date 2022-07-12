<?php
include('connection.php');
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);


extract($_REQUEST);
if (isset($send)) {
	mysqli_query($con, "insert into feedback values('','$n','$e','$mob','$msg')");
	$msg = "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Trinity Hotel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

	<link rel="stylesheet" href="./css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="./css/animate.css">

	<link rel="stylesheet" href="./css/owl.carousel.min.css">
	<link rel="stylesheet" href="./css/owl.theme.default.min.css">
	<link rel="stylesheet" href="./css/magnific-popup.css">

	<link rel="stylesheet" href="./css/aos.css">

	<link rel="stylesheet" href="./css/ionicons.min.css">

	<link rel="stylesheet" href="./css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="./css/jquery.timepicker.css">


	<link rel="stylesheet" href="./css/flaticon.css">
	<link rel="stylesheet" href="./css/icomoon.css">
	<link rel="stylesheet" href="./css/style2.css">
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
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="Aboutus.php" class="nav-link">Aboutus</a></li>
					<li class="nav-item"><a href="restaurant.php" class="nav-link">Services</a></li>
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
	<section class="home-slider owl-carousel">
		<div class="slider-item" style="background-image:url(images/images/bg_3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-md-8 ftco-animate">
						<div class="text mb-5 pb-5">
							<h1 class="mb-3">Trinity</h1>
							<h2>More than a hotel... an experience</h2>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image:url(images/images/bg_4.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text align-items-center">
					<div class="col-md-8 ftco-animate">
						<div class="text mb-5 pb-5">
							<h1 class="mb-3">Experience Epic Beauty</h1>
							<h2>Trinity Hotel &amp; Resort</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-wrap">
		<div class="container">
			<div class="row no-gutters">
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/images/room-3.jpg);">
						<div class="text text-center pb-2">
							<h3>Special Rooms</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/about.jpg);">
						<div class="text text-center pb-2">
							<h3>Safaris</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<a href="#" class="services-wrap img align-items-end d-flex" style="background-image: url(images/images/resto.jpg);">
						<div class="text text-center pb-2">
							<h3>Restaurant</h3>
						</div>
					</a>
				</div>
				<div class="col-md-3">
					<div class="services-wrap services-overlay img align-items-center d-flex" style="background-image: url(images/images/sleep.jpg);">
						<div class="text text-center pb-2">
							<h3 class="mb-0">Suites &amp; Rooms</h3>
							<span>Special Rooms</span>
							<div class="d-flex mt-2 justify-content-center">
								<div class="icon">
									<a href="Suite.php"><span class="ion-ios-arrow-forward"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Welcome to Trinity Hotel</span>
					<h2 class="mb-4">A New Vision of Luxury Hotel</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md pr-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-reception-bell"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Friendly Service</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-serving-dish"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Get Breakfast</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-sel Searchf-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-car"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Transfer Services</h3>
						</div>
					</div>
				</div>
				<div class="col-md px-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="flaticon-spa"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Suits &amp; SPA</h3>
						</div>
					</div>
				</div>
				<div class="col-md pl-md-1 d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services py-4 d-block text-center">
						<div class="d-flex justify-content-center">
							<div class="icon d-flex align-items-center justify-content-center">
								<span class="ion-ios-bed"></span>
							</div>
						</div>
						<div class="media-body">
							<h3 class="heading mb-3">Cozy Rooms</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section bg-light ftco-room">
		<div class="container-fluid px-0">
			<div class="row no-gutters justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Trinity Rooms</span>
					<h2 class="mb-4">Hotel Master's Rooms</h2>
				</div>
			</div>
			<div class="row no-gutters">
				<div class="col-lg-6">
					<div class="room-wrap">
						<div class="img d-flex align-items-center" style="background-image: url(images/images/bg_3.jpg);">
							<div class="text text-center px-4 py-4">
								<h2>Welcome to <a href="index.html">Trinity</a> Hotel</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img" style="background-image: url(images/images/room-1.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">Ksh15000</span> <span class="per">per night</span></p>
								<h3 class="mb-3"><a href="Suite.php">Suite Room</a></h3>
								<p class="pt-1"><a href="Suite.php" class="btn-custom px-3 py-2">Check Room <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img order-md-last" style="background-image: url(images/images/room-2.jpg);"></a>
						<div class="half right-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">Ksh75000</span> <span class="per">per night</span></p>
								<h3 class="mb-3"><a href="Family.php">Family Room</a></h3>
								<p class="pt-1"><a href="Family.php" class="btn-custom px-3 py-2">Check Room <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img order-md-last" style="background-image: url(images/images/room-3.jpg);"></a>
						<div class="half right-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">Ksh120000</span> <span class="per">per night</span></p>
								<h3 class="mb-3"><a href="deluxe.php">Deluxe Room</a></h3>
								<p class="pt-1"><a href="deluxe.php" class="btn-custom px-3 py-2">Check Room <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img" style="background-image: url(images/images/room-4.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">Ksh500000</span> <span class="per">per night</span></p>
								<h3 class="mb-3"><a href="Luxury.php">Luxury Room</a></h3>
								<p class="pt-1"><a href="Luxury.php" class="btn-custom px-3 py-2">Check Room <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="room-wrap d-md-flex">
						<a href="#" class="img" style="background-image: url(images/images/room-6.jpg);"></a>
						<div class="half left-arrow d-flex align-items-center">
							<div class="text p-4 p-xl-5 text-center">
								<p class="star mb-0"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
								<p class="mb-0"><span class="price mr-1">Ksh800000</span> <span class="per">per night</span></p>
								<h3 class="mb-3"><a href="Superior.php">Superior Room</a></h3>
								<p class="pt-1"><a href=".php" class="btn-custom px-3 py-2">Check Room <span class="icon-long-arrow-right"></span></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section testimony-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Our Happy Guest Says</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-8 ftco-animate">
					<div class="row ftco-animate">
						<div class="col-md-12">
							<div class="carousel-testimony owl-carousel ftco-owl">
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/images/bryan.JPG)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
											<p class="mb-4">I loved it there. Great service from the staff and the place has great ambience.</p>
											<p class="name">Bryan Mureithi</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/images/sam.jpeg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
											<p class="mb-4">The hotel and rooms are extremely clean and the staff is expectionally helpful </p>
											<p class="name">Samuel Carson</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/images/shaks.jpeg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
											<p class="mb-4">Good food, great location in Mombasa.</p>
											<p class="name">Syevuo Shakira</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
											<p class="mb-4">Tranquil, peaceful and value for money accommodation. Maureen looked after us and she was fantastic. Nothing was too much trouble for her. Our breakfast table and evening meal table were beautifully decorated.</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="testimony-wrap py-4 pb-5">
										<div class="user-img mb-4" style="background-image: url(images/images/person_1.jpg)">
											<span class="quote d-flex align-items-center justify-content-center">
												<i class="icon-quote-left"></i>
											</span>
										</div>
										<div class="text text-center">
											<p class="star"><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span><span class="ion-ios-star"></span></p>
											<p class="mb-4">The room was very nice and clean, pretty renovated, very nice garden and it was just very pleasant to sit outside. The items like shaving kit and dental kit is something very rare at the hotels so I appreciate they were there! The stuff was very kind as well, I liked the welcoming drink too :)</p>
											<p class="name">Nathan Smith</p>
											<span class="position">Guests</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

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
							<li><a href="../Hotel/admin/index.php" class="py-2 d-block">Admin</a></li>
							<li><a href="../Hotel/reservation.php" class="py-2 d-block">Rooms</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Privacy</h2>
						<ul class="list-unstyled">
							<li><a href="../Hotel/Aboutus.php" class="py-2 d-block">About Us</a></li>
							<li><a href="../Hotel/attraction.php" class="py-2 d-block">Gallery</a></li>
							<li><a href="../Hotel/restaurant.php" class="py-2 d-block">Services</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md">
					<div class="ftco-footer-widget mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon icon-map-marker"></span><span class="text">203 Fort Jesus, Old Town, Mombasa, Kenya</span></li>
								<li><a href="#"><span class="icon icon-phone"></span><span class="text">+254 757389829</span></a></li>
								<li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@trinityhotel.com</span></a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--Feedback Start Here-->
				<div class="col-sm-4 text-center">
					<div class="panel panel-primary">
						<div class="panel-heading">Feedback</div>
						<div class="panel-body">
							<?php echo @$msg; ?>
							<div class="feedback">
								<form method="post"><br>
									<div class="form-group">
										<input type="text" name="n" class="form-control" id="#" placeholder="Enter Your Name" required>
									</div>
									<div class="form-group">
										<input type="Email" name="e" class="form-control" id="#" placeholder="Email" required>
									</div>
									<div class="form-group">
										<input type="Number" name="mob" class="form-control" id="#" placeholder="Mobile Number" required>
									</div>
									<div class="form-group">
										<textarea type="Text" name="msg" class="form-control" id="#" placeholder="Type Your Message" required></textarea>
									</div>
									<input type="submit" value="send" name="send" class="btn btn-primary btn-group-justified" required>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!--Feedback Panel Close here-->
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