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

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compaitable" content="ie=edge">
    <title>Attractions</title>
    <link rel="stylesheet" type="text/css" href="css/attr.css">
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
    <header>
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
                        <li class="nav-item"><a href="restaurant.php" class="nav-link">Services</a></li>
                        <li class="nav-item active"><a href="attraction.php" class="nav-link">Attractions</a></li>
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

    </header>
    <div class="pimg1">
        <div class="ptext">
            <span class="border">
                Reason to Visit Kenya
            </span>
        </div>
    </div>
    <section class="section section-light">
        <h2>Sandy Beaches</h2>
        <p>
            Nicknamed the "sunshine state" for its year-round warm weather, Mombasa is
            home to Kenya's top beaches, fringed by palms and stretching for miles
            along the Indian Ocean. Each beach has its own vibe, from backpacker hangouts
            to wellness-focused yoga retreats.
            If you're looking for an upbeat scene, beaches like Diani, Shanzu, and Watamu offer
            water sports like surfing and parasailing, as well as live music on the sands after sunset.
            You can unwind or keep the party going at beach shacks, where bars serve ice-cold beer and
            restaurants dish up seafood like prawn tempura and tuna tartare.
        </p>
    </section>
    <div class="pimg2">
        <div class="ptext">
            <span class="border trans">
                Beaches
            </span>
        </div>
    </div>

    <section class="section section-dark">
        <h2>Kenyan cuisine</h2>
        <p>
            Kenya's famed cuisine leans heavily on food like ugali, githeri, and chapati,
            and frequently combines rich ingredients like coconut with tangy ones such as
            tamarind and the beans. Spices like turmeric and cumin add deep flavors.
            Local favorites like shawarma, a creamy potato and spinach soup, reflect 4 centuries of
            coastal rule. Another coastal specialty is plata, potatos that are deep-fried and served with soup
            and coconut. There's also a large community here, which uses ingredients like tuna
            and rabbit (roasted or in curries) that are rare in the rest of Kenya.
        </p>
    </section>

    <div class="pimg3">
        <div class="ptext">
            <span class="border trans">
                Kenyan Cuisine
            </span>
        </div>
    </div>

    <section class="section section-light">
        <h2>Night Life</h2>
        <p>
            Kenya's buzzing nightlife is a throwback to the 1960s, when beaches like Pirates became
            famous for their full-moon raves. The scene is more organized these days, but crowds
            still hang out at trendy beach shacks where DJs spin house and trance till sunrise.
            North Coast is the main party zone, with a string of lively clubs and bars overlooking Shanzu and
            Watamu beaches. For a more laid-back vibe, you'll find old-school taverns both beachside
            and in the state capital Mombasa, where you can sip mnazi, a strong local liquor distilled from coconuts.
        </p>
    </section>

    <div class="pimg4">
        <div class="ptext">
            <span class="border trans">
                Night Life
            </span>
        </div>
    </div>

    <section class="section section-dark">
        <h2>Museum and Galleries</h2>
        <p>
            Museums and galleries reflect Kenya's "East meets West" culture, with exhibits ranging from
            Kenya's wildlife to famous paintings. Many contemporary artists favor Kenyan over
            colonial styles in their works, which are often displayed at the Museum of Nairobi.
            The Mashujaa Museum located in Langata,Nairobi has articles and information about how Kenya
            got its independence and the heros that fought for it.
        </p>
    </section>


    <div class="pimg5">
        <div class="ptext">
            <span class="border trans">
                Galleries
            </span>
        </div>
    </div>

    <section class="section section-light">
        <h2>Adventure Sports</h2>
        <p>
            With its coastline, rivers, and inland forests, Mombasa is a hot spot for adventure sports
            ranging from waterfall trekking to all-terrain biking. Lots of activities are aimed at
            backpackers, while options like parasailing and ballooning are also popular with families.
            Windsurfers and kitesurfers can catch stiff breezes at beaches like Pirates and Shelly, with
            lighter winds at Diani Beach ideal for beginners. Groups of friends can skim the waves on
            banana boat rides, or down the Sagana River on a whitewater rafting trip. For adrenaline junkies,
            there's a bungee jump platform at Chania Falls.
        </p>
    </section>


    <div class="pimg6">
        <div class="ptext">
            <span class="border trans">
                Adventure Sports
            </span>
        </div>
    </div>
</body>

</html>