<?php
include('db.php');
?>
<html>

<head>
    <title>Hotel Booking</title>
    <link rel="stylesheet" href="css/Main.css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>

<body>


    <header>

        <nav>
            <div class="row">
                <img src="images/Logo.png" class="logo">
                <ul class="main-nav" id="check-class">
                    <li><a href="Main.php">Home</a></li>
                    <li><a href="Aboutus.php">About Us</a></li>
                    <li><a href="restaurant.php">Services</a></li>
                    <li><a href="demo.php">Gallery</a></li>
                    <li><a href="reservation.php">Book Your Room</a></li>
                    <li><a href="attraction.php">Attractions </a></li>
                </ul>
                <!-- <a href="#" class="mobile-icon" onclick="slideshow()"> <i class="fa fa-bars"></i></a>	 -->
            </div>
        </nav>

        <div class="main-content-header">
            <div class="slider">
                <!--image slider start-->
                <div class="slides">
                    <!--radio slider start-->
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <input type="radio" name="radio-btn" id="radio5">

                    <!--radio slider end-->
                    <!--slides images start-->
                    <div class="slide first">
                        <img src="images/1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/4.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="images/5.jpg" alt="">
                    </div>
                    <!--slides images end-->
                    <!--automatic nav start-->
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                        <div class="auto-btn5"></div>
                    </div>
                    <!--automatic nav end-->
                </div>
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
                <label for="radio1" class="manual-btn"></label>
                <label for="radio2" class="manual-btn"></label>
                <label for="radio3" class="manual-btn"></label>
                <label for="radio4" class="manual-btn"></label>
                <label for="radio5" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->

        </div>
        <!--image slider end-->
        <script type="text/javascript">
            var counter = 2;
            setInterval(function() {
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if (counter > 5) {
                    counter = 1;
                }
            }, 5000);
        </script>

    </header>

    <section class="about">
        <div class="about-title">
            <h2> Our Top Rooms </h2>
            <!------------------------------------------------------------------------------------------->

        </div>

        <div class="about-pages">
            <div class="section-1">
                <h2>Superior Room </h2>


                <div class="container">

                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <div class="mySlides1">
                            <img src="images/Royal Pent House/1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides1">
                            <img src="images/Royal Pent House/2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides1">
                            <img src="images/Royal Pent House/3.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                    </div>


                </div>



                <p>Enjoy all the luxury and comfort you have come to expect from a Trinity Hotel in the Superior Room.
                    Designed as an ideal space for work and relaxation alike, all our rooms are elegantly decorated
                    and equipped with all the latest conviniences, including mini bar and in-room electronic safe.
                    All our rooms have complimentary Wi-Fi access and are also equppied with a working desk and flat-screen tv.
                </p>
            </div>

            <div class="section-2">
                <h2> Deluxe Room </h2>
                <div class="container">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <div class="mySlides2">
                            <img src="images/Ocean Terrace Suit/1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/Ocean Terrace Suit/2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides2">
                            <img src="images/Ocean Terrace Suit/3.jpg" style="width:100%">
                        </div>
                        <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                    </div>

                </div>

                <p>Enjoy all the luxury and comfort you have come to expect from a Trinity Hotel in the Superior Room.
                    Designed as an ideal space for work and relaxation alike, all our rooms are elegantly decorated
                    and equipped with all the latest conviniences, including mini bar and in-room electronic safe.
                    All our rooms have complimentary Wi-Fi access and are also equppied with a working desk and flat-screen tv.</p>
            </div>




        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section feeback">
                    <p>
                        <center> Help us in serving you better</center>
                    </p><br>
                    <p><a href="feeback.php" class="feedback"> Give Feeback </a></p>

                </div>
                <div class="footer-section links">

                    <p>
                        <center>My Trinity Hotel<center>
                    </p><br>
                    <!-- <p><a href="signin.html" class="register"> Sign In/Register</a></p> -->
                </div>
                <div class="footer-section contact-form">
                    <div class="contact">
                        <span><i class="fa fa-phone"></i> &nbsp; 123-456-789</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <span><i class="fa fa-envelope"></i> &nbsp; info@trinityhotel.com</span>
                    </div><br>
                    <div class="socials">
                        <a href="https://www.facebook.com/profile.php?id=100004997712089" style="color: white; text-decoration: none;" i class="fa fa-facebook"></i></a>&nbsp;&nbsp;
                        <a href="https://www.instagram.com/vineet1516/" style="color: white; text-decoration: none;" i class="fa fa-instagram"></i></a>&nbsp;&nbsp;
                        <a href="https://twitter.com/Vineet1612Kumar" style="color: white; text-decoration: none;" i class="fa fa-twitter"></i></a>&nbsp;&nbsp;
                        <a href="https://www.youtube.com/channel/UCUjZZTJbOWY43oqWo7g6tMg?view_as=subscriber" style="color: white; text-decoration: none;" i class="fa fa-youtube"></i></a>&nbsp;
                    </div>
                </div>

            </div>
            <div class="footer-bottom">
                &copy; trinity.com | Designed by Trinity Hotels<br>
                Copyright &copy Nairobi, Kenya. All rights reserved
            </div>
        </div>


    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"></script>

    <script src="app.js"></script>
    <script>
        var slideIndex = [1, 1];
        var slideId = ["mySlides1", "mySlides2"]
        showSlides(1, 0);
        showSlides(1, 1);



        function plusSlides(n, no) {
            showSlides(slideIndex[no] += n, no);
        }

        function showSlides(n, no) {
            var i;
            var x = document.getElementsByClassName(slideId[no]);
            if (n > x.length) {
                slideIndex[no] = 1
            }
            if (n < 1) {
                slideIndex[no] = x.length
            }
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            x[slideIndex[no] - 1].style.display = "block";
        }
    </script>



</body>

</html>