<?php
include('connection.php');
extract($_REQUEST);
if (isset($send)) {
  mysqli_query($con, "insert into feedback values('','$n','$e','$mob','$msg')");
  $msg = "<h4 style='color:green;'>feedback sent successfully</h4>";
}
?>
<!-- Footer1 Start Here-->

<footer style="background-color: #393939;">
  <div class="container-fluid">
    <div class="col-sm-4 text-justify">
      <h3 style="color:goldenrod;">Contact Us</h3>
      <p style="color:white;"><strong>Address:&nbsp;</strong>Old Town,Mombasa,Kenya</p>
      <p style="color:white;"><strong>Email-Id:&nbsp;</strong>trinityhotel@gmail.com</p>
      <p style="color:white;"><strong>Contact Us:&nbsp;</strong>(+254) 7275308190</p><br><br><br>
    </div>&nbsp;

    <div class="col-md">
      <div class="ftco-footer-widget mb-4 ml-md-5">
        <h2 style="color:goldenrod;" class="ftco-heading-2">Useful Links</h2>
        <ul class="list-unstyled">
          <li><a style="color:white;" href="../Hotel/admin/index.php" class="py-2 d-block">Admin</a></li>
          <li><a style="color:white;" href="../Hotel/reservation.php" class="py-2 d-block">Rooms</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md">
      <div class="ftco-footer-widget mb-4">
        <h2 style="color:goldenrod;" class="ftco-heading-2">Privacy</h2>
        <ul class="list-unstyled">
          <li><a style="color:white;" href="../Hotel/Aboutus.php" class="py-2 d-block">About Us</a></li>
          <li><a style="color:white;" href="../Hotel/attraction.php" class="py-2 d-block">Gallery</a></li>
          <li><a style="color:white;" href="../Hotel/restaurant.php" class="py-2 d-block">Services</a></li>
        </ul>
      </div>
    </div>

    <!--Feedback Panel Close here-->

  </div>
</footer>
<!--Footer1 Close Here-->