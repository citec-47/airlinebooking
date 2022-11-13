<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add a flight</title>
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
      <form action="add_flight_details_form_handler.php" method="post">
	  		<?php
				if(isset($_GET['msg']) && $_GET['msg']=='success')
				{
					echo "<strong style='color:#34ee1a;text-align: center;display: block;font-size: 31px;'>The Flight Schedule has been successfully added.</strong>
						<br>
						<br>";
				}
				else if(isset($_GET['msg']) && $_GET['msg']=='failed')
				{
					echo "<strong style='color: red'>*Invalid Flight Schedule Details, please enter again.</strong>
						<br>
						<br>";
				}
			?>
        <div class="text-center" style="margin-top:-24px">
          <h2 class="title-section mb-3">Add A New Flight </h2>
          <p style="color:red;">Fill The Below Form To Add A New Flight</p>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-lg-8">
            <form action="#" class="form-contact">
              <div class="row">
			  <div class="col-sm-6 py-2" >
                  <label  for="name" style="color:#ff08b6;">Enter The Flight Number</label>
                  <input list="origins"  name="flight_no" type="text" class="form-control" id="name" placeholder="Eg:AA101" required>
                </div>

				<div class="col-sm-6 py-2" >
                  <label  for="jet_id" style="color:#ff08b6;">Enter The Jet Id</label>
                  <input list="origins"  name="jet_id" type="text" class="form-control" id="jet_id" placeholder="Eg:10001" required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="email" style="color:#ff08b6;">Enter The Origin</label>
                  <input list="destinations"  name="origin"  type="text" class="form-control" id="email" placeholder="From.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="destination" style="color:#ff08b6;">Enter The Destination</label>
				  <input list="destinations" name="destination" type="text" class="form-control" id="destination" placeholder="To.." required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="dep_date" style="color:#ff08b6;" >Enter The Departure Date</label>
                  <input type="date" name="dep_date" style="text-align:center;" class="form-control" id="dep_date" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="arr_date" style="color:#ff08b6;" >Enter The Arrival Date</label>
                  <input type="date" name="arr_date" style="text-align:center;" class="form-control" id="arr_date" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="dep_time" style="color:#ff08b6;" >Enter The Departure Time</label>
                  <input type="time" name="dep_time" style="text-align:center;" class="form-control" id="dep_time" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="arr_time" style="color:#ff08b6;" >Enter The Arrival Time</label>
                  <input type="time" name="arr_time" style="text-align:center;" class="form-control" id="arr_time" placeholder="Eg:3" type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="seats_eco" style="color:#ff08b6;" >Number Of Seats(Economy Class)</label>
                  <input type="number" name="seats_eco" style="text-align:center;" class="form-control" id="seats_eco"  type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="seats_bus" style="color:#ff08b6;" >Number Of Seats(Business Class)</label>
                  <input type="number" name="seats_bus" style="text-align:center;" class="form-control" id="seats_bus"  type="number" name="no_of_pass" required>
                </div>

                <div class="col-sm-6 py-2">
                  <label for="price_eco" style="color:#ff08b6;" >Ticket Price(Economy Class)</label>
                  <input type="number" name="price_eco" style="text-align:center;" class="form-control" id="price_eco"  type="number" name="no_of_pass" required>
                </div>

				<div class="col-sm-6 py-2">
                  <label for="price_bus" style="color:#ff08b6;" >Ticket Price(Business Class)</label>
                  <input type="number" name="price_bus" style="text-align:center;" class="form-control" id="price_bus"  type="number" name="no_of_pass" required>
                </div>

                <div class="col-12 mt-3">
                  <button type="submit" name="Submit" style="display:block;margin:auto"  value="Submit" class="btn btn-primary px-5" >Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->
</body>
</html>