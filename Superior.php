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
  <title>Superior Room</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="css2/style.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
  <link rel="stylesheet" href="./css/style2.css">
</head>

<body style="margin-top:50px;background-color: goldenrod;">
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
          <li class="nav-item"><a href="reservation.php" class="nav-link">Book</a></li>
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

  <br><br><br>
  <div class="container-fluid" style="margin-top:2%;">
    <div class="continer">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-7">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
              <li data-target="#myCarousel" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="images/Superior/1.jpg" class="thumbnail" alt="img1">
              </div>

              <div class="item">
                <img src="images/Superior/2.jpg" class="thumbnail" alt="im2">
              </div>

              <div class="item">
                <img src="images/Superior/3.jpg" class="thumbnail" alt="im3">
              </div>

              <div class="item">
                <img src="images/Superior/4.jpg" class="thumbnail" alt="img4">
              </div>

              <div class="item">
                <img src="images/Superior/5.jpg" class="thumbnail" alt="img5">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <h2 class="Ac_Room_Text">Superior Room</h2>
          <p>PRICE: Ksh 800,000</p>
          <p class="text-justify">Enjoy the view of Anand from attach sitting area, An upgraded version of the Deluxe room, these rooms offer an elegant design with larger room space..</p>
          <p class="pt-1"><a style="color: white;" href="Booking Form.php" class="btn-custom px-3 py-2">Book Now <span class="icon-long-arrow-right"></span></a></p>
        </div>
        <div class="col-sm-3">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h4 style="text-align: center">Room Type</h4>
            </div><br>
            <div class="panel-body-right text-center">
              <a href="Suite.php">Suite Room</a>
              <hr>
              <a href="Family.php">Family Room</a>
              <hr>
              <a href="deluxe.php">Deluxe Room</a>
              <hr>
              <a href="Superior.php">Superior Room</a>
              <hr>
              <a href="Luxury.php">Luxury Room</a>
              <hr>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>