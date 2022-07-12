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

<html>

<head>
    <title>

    </title>
    <link rel="stylesheet" href="css/aboutus.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
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
                    <li class="nav-item active"><a href="Aboutus.php" class="nav-link">Aboutus</a></li>
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


    <section class="heading">
        <video autoplay loop class="video-background" muted plays-inline>
            <source src="images/video.mp4" type="video/mp4">
        </video>

        <div class="welcome-msg">
            <h1> About Trinity Hotels </h1>
            <p>
                Trinity Hotels, is an Kenyan hospitality chain of leased and franchised hotels, homes and living spaces.
                Founded in 2022 by a group of young entrepreneurs, Trinity initially consisted mainly of budget hotels. The startup expanded
                globally with thousands of hotels, vacation homes and millions of rooms in Kenya, South Africa, UAE, Nepal, Egypt,
                Brazil, Mexico, UK, Philippines, Japan, Saudi Arabia, Sri Lanka, Indonesia, Vietnam, the United States and more.

                Nestled beside an 18-hole golf course minutes from the slopes, Hotel Park City is consistently acclaimed among the best hotels
                in Park City, Utah. Among our most recent accolades, our AAA Four Diamond resort has proudly been rated a “Top Ski Hotel” by Conde
                Nast Traveler, and our Ruth’s Chris Steak House is the #1 rated Ruth’s Chris Steak House in the western U.S. We’ve also been placed
                in the Certificate of Excellence Hall of Fame by TripAdvisor and earned the Certificate of Excellence (TripAdvisor), a Platinum Choice
                Award (Smart Meetings Magazine), recognition as a “Most Admired Company” (Utah Business Magazine) and more.
            </p>
            <a href="Form.html" class="btn btn-subscribe"> Book Room </a>
            <a href="Main.html" class="btn btn-comment"> Return to Home</a>
        </div>
    </section>
</body>

</html>