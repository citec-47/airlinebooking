<?php
	session_start();
?>
<!-- <html>
	<head>
		<title>
			Welcome Administrator
		</title>
		<link rel="stylesheet" type="text/css" href="css/style.css"/>
		<link rel="stylesheet" href="font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<img class="logo" src="images/shutterstock_22.jpg"/> 
		<h1 id="title">
			IRCTC Airways	</h1>
		<div>
			<ul>
				<li><a href="admin_homepage.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<h2>Welcome Administrator!</h2>
		<table cellpadding="5">
			
			<tr>
				<td class="admin_func"><a href="admin_view_booked_tickets.php"><i class="fa fa-plane" aria-hidden="true"></i> View List of Booked Tickets for a Flight</a>
				</td>
			</tr>
			<tr>
				<td class="admin_func"><a href="add_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Add Flight Schedule Details</a>
				</td>
			</tr>
			<!-- <tr>
				<td class="admin_func"><a href="modify_flight_details.php"><i class="fa fa-plane" aria-hidden="true"></i> Modify Flight Schedule Details</a>
				</td>
			</tr>
			
		</table>
	</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Admin Home</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="Formcss/bootstrap.min.css">
      <link rel="stylesheet" href="Formcss/style.css">
      <link rel="stylesheet" href="Formcss/responsive.css">
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <link rel="stylesheet" href="Formcss/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <style>
      body{
        color: #daccfd;
    }
   </style>

   </head>
   <body>
    <header>
        <!-- header inner -->
        <div class="header" style="position: fixed;z-index: 1;">
           <div class="container-fluid">
              <div class="row">
                 <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo" style="margin: 10px -80px;">
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                             </li>
						         <li class="nav-item">
                              <a class="nav-link" href="logout.php">Log Out</a>
                           </li>
                             <li class="nav-item">
                              <a class="nav-link" href="aboutus.php">About Us</a>
                           </li>

                          </ul>
                       </div>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>
     <br>
 <!-- features -->
 <div class="Features">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
						<h2>Welcome To Our FlightJet Airline Management Admin</h2>
					
                     <!-- <h2>Welcome To Our FlightJet Airline Management</h2> -->
                     <span>You Can Do The Following Things From Here.</span>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4">
                  <div class="Our_box" style="background-color:#9cece8;">
                     <i><img src="./Formcss/Images/flightseats.jpg" alt="#"/></i>
                     <h4>View The List Of Booked Flight Tickets Of A Particular Flight</h4>
					 <a href="admin_view_booked_tickets.php" class="btn btn-primary" style="margin-top:20px;">View Now</a>
                  </div>

               </div>
               <div class="col-md-4">
                  <div class="Our_box" style="background-color:#fdfd37;">
                     <i><img src="./Formcss/Images/reservationConfirm.jpg" alt="#"/></i>
                     <h4>Add Flight Schedule Details</h4>
					 <a href="add_flight_details.php" class="btn btn-primary" style="margin-top:20px">Add Now</a>
                  </div>
               </div>
               
               <div class="col-md-4">
                 <div class="Our_box" style="background-color:#ff1a1a;" >
                     <i><img src="./Formcss/Images/cancelbooking.jpg" alt="#"/></i>
                     <h4>Delete Flight Schedule Details</h4>
					 <a href="delete_flight_details.php" class="btn btn-primary" style="margin-top:20px">Delete Now</a>
                  </div>
                  </div>
               </div>

            </div>
         </div>
      <!-- end Features -->

    <script src="Formjs/jquery.min.js"></script>
    <script src="Formjs/popper.min.js"></script>
    <script src="Formjs/bootstrap.bundle.min.js"></script>
    <script src="Formjs/jquery-3.0.0.min.js"></script>
    <script src="Formjs/plugin.js"></script>
    <!-- sidebar -->
    <script src="Formjs/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Formjs/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>