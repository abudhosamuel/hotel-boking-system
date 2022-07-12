<?php
session_start();
$eid = $_SESSION['create_account_logged_in'];
error_reporting(1);
?>
<!--Menu Bar Close Here-->
<nav style="background-color: gold; color: white;" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <img src="logo/logo2 .png" width="100px" height="70px" style="margin-top:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a style="color:darkslategray" href="index.php" title="Home">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">

        <li><a style="color:darkslategray" href="admin/index.php" title="Admin Login"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Admin Login</a></li>

        <?php
        if ($_SESSION['create_account_logged_in'] != "") {
        ?>
          <li class="dropdown"><a style="color:darkslategray" class="dropdown-toggle" data-toggle="dropdown" href="#">View Status <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile.php">Profile</a></li>
              <li><a href="order.php">Booking Status</a></li>
              <li><a href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?PHP } else {
        ?>
          <li><a href="Login.php" title="login"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;User Login</a>
          </li>
        <?php
        } ?>
      </ul>
    </div>
  </div>
</nav>

<!--Menu Bar Close Here-->