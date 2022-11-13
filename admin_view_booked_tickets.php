<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Tickets</title>
  <link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">
</head>
<body>
  <header>
<nav class="navbar navbar-expand-lg navbar-light " >
      <div class="container">
        <a href="index.php" class="navbar-brand">Flight<span class="text-primary">jet</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="admin_homepage.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item disabled">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
            <li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    </header>
<div class="page-section">
      <div class="container">
      <form action="admin_view_booked_tickets_form_handler.php" method="post">
        <div class="text-center" style="margin-top:-24px">
          <h2 class="title-section mb-3">VIEW LIST OF BOOKED TICKETS FOR A FLIGHT</h2>
          <p style="color:red;">Fill The Below Details To View List Of Booked Tickets For A Flight </p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact">
              <div class="row">

                <div class="col-sm-6 py-2">
                  <label for="name" style="color:#ff08b6;">Enter the Flight Number</label>
                  <input  name="flight_no" type="text" class="form-control" placeholder="Eg:AA101" required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;">Enter The Departure Date</label>
                  <input  name="departure_date" type="date" class="form-control"  required>
                </div>
              </div>
			  <button type="submit" name="Submit" style="display:block;margin:auto;margin-top:20px"  value="Submit" class="btn btn-primary px-5" >Submit</button>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
</html>