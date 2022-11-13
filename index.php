
<?php
  include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Airline Management System</title>

  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->

  <header>

<marquee>PARCELS should be brought directly to our agency for registration</marquee>
    <nav class="navbar navbar-expand-lg navbar-light " >
      <div class="container">
        <a href="index.php" class="navbar-brand">Flight<span class="text-primary">jet</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
			<li class="nav-item">
              <a href="lhpms/login.php" class="nav-link">Parcels Here</a>
            </li>
            <li class="nav-item">
              <a href="login_page.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="new_user.php" class="nav-link">Sign Up</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->

    <div class="page-banner home-banner mb-5">
      <div class="slider-wrapper">
        <div class="owl-carousel hero-carousel">
          <div class="hero-carousel-item">
            <img src="./assets/img/airplaneBgOne.jpg" alt="Noimage">
            <div class="img-caption">
              <div class="subhead">Let your dreams take flight</div>
              <h1 class="mb-4">FlightJet Airlines</h1>
              <a href="new_user.php" class="btn btn-outline-light">Sign Up</a>
			  
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="./assets/img/airplaneBgTwo.jpg" alt="">
            <div class="img-caption">
              <h1 class="mb-4">Exciting Offers On Tickets</h1>
              <h1 class="mb-4">Very Good Service And Comfortable Flight</h1>
              <!-- <a href="#services" class="btn btn-primary">See Pricing</a> -->
            </div>
          </div>
          <div class="hero-carousel-item">
            <img src="./assets/img/airplaneBgThree.jpg" alt="">
            <div class="img-caption">
              <div class="subhead">Very Good Flight Experience</div>
              <h1 class="mb-4">Join Us And Let The Adventure Begin</h1>
              <a href="new_user.php" class="btn btn-primary">Join Flightjet</a>
            </div>
          </div>
        </div>
      </div> <!-- .slider-wrapper -->
    </div> <!-- .page-banner -->
  </header>

  <main>
    <div class="page-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3">
            <div class="subhead">About FlightJet</div>
            <h2 class="title-section">Ready To <span class="fg-primary"> Fly?</span></h2>

            <p>One of the leading online booking engine providers EXCLUSIVELY for travel agencies. Our aim is to provide you with a fast and easy online access to the products your clients are asking for wherever and whenever that may be.FlightJet Airline has developed an Airline Reservation System by integrating single or multiple GDS and Third-Party-Flight APIs both IATA and Non-IATA agents based in a requirements of clients. </p>

          </div>
          <div class="col-lg-6 py-3">
            <div class="about-img">
              <img src="./assets/img/about.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section">
      <div class="container">
        <div class="text-center">
          <div class="subhead">Our Services</div>
          <h2 class="title-section">See what you can do in our website</h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/web_development.svg" alt="">
              </div>
              <h5>print E-tickets</h5>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/graphics_design.svg" alt="">
              </div>
              <h5>Notifications through email</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/seo_and_marketing.svg" alt="">
              </div>
              <h5>fare rules and baggage information.</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/customer_services.svg" alt="">
              </div>
              <h5>Customer Services</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/app_development.svg" alt="">
              </div>
              <h5>Trustworthy in all aspects</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/ui_ux_design.svg" alt="">
              </div>
              <h5>Supports frequent flyers programs</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/product_design.svg" alt="">
              </div>
              <h5>Reschedule ticket</h5>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 col-xl-3 py-3 mb-3">
            <div class="text-center">
              <div class="img-fluid mb-4">
                <img src="./assets/img/icons/data_analyst.svg" alt="">
              </div>
              <h5>Cancel booked tickets</h5>
            </div>
          </div>

        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->


    <div class="page-section">
      <div class="container-fluid">
        <div class="row row-cols-md-3 row-cols-lg-5 justify-content-center text-center">
          <div class="py-3 px-5">
            <img src="../assets/img/clients/airbnb.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/google.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/mailchimp.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/paypal.png" alt="">
          </div>
          <div class="py-3 px-5">
            <img src="../assets/img/clients/stripe.png" alt="">
          </div>
        </div>
      </div> <!-- .container-fluid -->
    </div> <!-- .page-section -->

  </main>

  <footer class="page-footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 py-3">
          <h3>Flight<span class="fg-primary">Jet</span></h3>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contact Information</h5>
          <p>Biyamassi,Yauonde</p>
          <p>Email: mauricendonyi40@gmail.com</p>
          <p>Phone: +237 653055410</p>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Company</h5>
          <ul class="footer-menu">
            <li><a href="#">Flights</a></li>
            <li><a href="#">Resources</a></li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="row mt-4">
        <div class="col-md-6">
          <p>Copyright 2022</a></p>
        </div>
        <div class="col-md-6 text-right">
          <div class="sosmed-button">
            <a href="#"><span class="mai-logo-facebook-f"></span></a>
            <a href="#"><span class="mai-logo-twitter"></span></a>
            <a href="#"><span class="mai-logo-youtube"></span></a>
            <a href="#"><span class="mai-logo-linkedin"></span></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  
<script src="./assets/js/jquery-3.5.1.min.js"></script>

<script src="./assets/js/bootstrap.bundle.min.js"></script>

<script src="./assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="./assets/vendor/wow/wow.min.js"></script>

<script src="./assets/vendor/fancybox/js/jquery.fancybox.min.js"></script>

<script src="./assets/vendor/isotope/isotope.pkgd.min.js"></script>

<script src="./assets/js/google-maps.js"></script>

<script src="./assets/js/theme.js"></script>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script> -->

</body>
</html>