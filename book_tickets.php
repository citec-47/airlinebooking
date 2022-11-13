
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
              <a href="customer_homepage.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item disabled">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
          </ul>
          <div class="sign_btn" style="margin-left:40px"><a href="profileview.php"><img src="./Formcss/Images/profileIcon2.png" alt=""></a></div>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    </header>
<div class="page-section">
      <div class="container">
      <form action="view_flights_form_handler.php" method="post">
        <div class="text-center" style="margin-top:-24px">
          <h2 class="title-section mb-3">Book Your Tickets</h2>
          <p style="color:red;">Fill The Below Form So That We Will Check If The Flights Are Available Or Not</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact">
              <div class="row">

                <div class="col-sm-6 py-2">
                  <label for="name" style="color:#ff08b6;">Enter The Origin</label>
                  <input list="origins" name="origin" type="text" class="form-control" id="name" placeholder="From.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;">Enter The Destination</label>
                  <input list="destinations" name="destination" type="text" class="form-control" id="email" placeholder="To.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="subject" style="color:#ff08b6;">Enter The Departure Date</label>
                  <input type="date" class="form-control" style="text-align:center" name="dep_date" min=
                    <?php 
                      $todays_date=date('Y-m-d'); 
                      echo $todays_date;
                    ?> 
                    max=
                    <?php 
                      $max_date=date_create(date('Y-m-d'));
                      date_add($max_date,date_interval_create_from_date_string("90 days")); 
                      echo date_format($max_date,"Y-m-d");
						        ?> required>
                </div>

                <div class="col-sm-4 py-2">
                  <label for="email" style="color:#ff08b6;" >Enter Number Of Passengers</label>
                  <input type="text" style="text-align:center;" class="form-control" id="email" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

                <div class="col-12 py-2">
                  <label for="message" style="color:#ff08b6;">Enter The Class</label>
                  <br>
                  <select name="class" class="col-sm-2 py-2 " style="text-align:center">
                  <option value="economy" >Economy</option>
                  <option value="business" >Business</option>
                  </select>
                </div>
                <div class="col-12 mt-3">
                  <button type="submit" style="display:block;margin:auto"  name="Search" class="btn btn-primary px-5" >Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
</html>


