<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>No Booked Tickets</title>
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

		<h2 style="text-align:center;margin-top:15px;color:#1dcb20">LIST OF BOOKED TICKETS FOR THE FLIGHT</h2>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['flight_no']))
				{
					$data_missing[]='Flight No.';
				}
				else
				{
					$flight_no=trim($_POST['flight_no']);
				}
				if(empty($_POST['departure_date']))
				{
					$data_missing[]='Departure Date';
				}
				else
				{
					$departure_date=$_POST['departure_date'];
				}

				if(empty($data_missing))
				{
                    DEFINE('DB_USER','root');
                    DEFINE('DB_PASSWORD','');
                    DEFINE('DB_HOST','localhost');
                    DEFINE('DB_NAME','flightjet');
    
                    $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                    OR dies('Could not connect to MySQL:' .
                        mysqli_connect_error());

					$query="SELECT pnr,date_of_reservation,class,no_of_passengers,payment_id,customer_id FROM Ticket_Details where flight_no=? and journey_date=? and booking_status='CONFIRMED' ORDER BY class";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_bind_result($stmt,$pnr,$date_of_reservation,$class,$no_of_passengers,$payment_id,$customer_id);
					mysqli_stmt_store_result($stmt);
					if(mysqli_stmt_num_rows($stmt)==0)
					{
						echo "<h3>No booked tickets information is available!</h3>";
					}
					else
					{
						echo "<table cellpadding=\"10\" style=\"display:block ruby;text-align:center;\"";
						echo "<tr>
						<th style=\"border:2px solid #880e0e\">PNR</th>
						<th style=\"border:2px solid #880e0e\">Date of Reservation</th>
						<th style=\"border:2px solid #880e0e\">Class</th>
						<th style=\"border:2px solid #880e0e\">No. of Passengers</th>
						<th style=\"border:2px solid #880e0e\">Payment ID</th>
						<th style=\"border:2px solid #880e0e\">Customer ID</th>
						</tr>";
						while(mysqli_stmt_fetch($stmt)) {
        					echo "<tr>
							<td  style=\"border:2px solid #880e0e\" >".$pnr."</td>
							<td  style=\"border:2px solid #880e0e\"> ".$date_of_reservation."</td>
							<td style=\"border:2px solid #880e0e\">".$class."</td>
							<td style=\"border:2px solid #880e0e\">".$no_of_passengers."</td>
							<td style=\"border:2px solid #880e0e\">".$payment_id."</td>
							<td style=\"border:2px solid #880e0e\">".$customer_id."</td>
        					</tr>";
    					}
    					echo "</table> <br>";
    				}
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);

				}
				else
				{
					echo "The following data fields were empty! <br>";
					foreach($data_missing as $missing)
					{
						echo $missing ."<br>";
					}
				}
			}
			else
			{
				echo "Submit request not received";
			}
		?>
	
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


