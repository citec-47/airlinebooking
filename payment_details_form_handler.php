<?php
	session_start();
?>
<html>
	<head>
		<title>Submit Payment Details</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Pay_Now']))
			{
				$no_of_pass=$_SESSION['no_of_pass'];
				$flight_no=$_SESSION['flight_no'];
				$journey_date=$_SESSION['journey_date'];
				$class=$_SESSION['class'];
				$pnr=$_SESSION['pnr'];
				$payment_id=$_SESSION['payment_id'];
				$total_amount=$_SESSION['total_amount'];
				$payment_date=$_SESSION['payment_date'];
				$payment_mode=$_POST['payment_mode'];	
				// $lounge_acce = $_SESSION['lounge_access'];
				// $priority_check = $_SESSION['priority_checkin']	;	
				// $insurance_check = $_SESSION['insurance'];
				$booking_sta ="CONFIRMED";
				$customer_id=$_SESSION['login_user'];
				// require_once('Database Connection file/mysqli_connect.php');
                DEFINE('DB_USER','root');
                DEFINE('DB_PASSWORD','');
                DEFINE('DB_HOST','localhost');
                DEFINE('DB_NAME','flightjet');

                $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                OR dies('Could not connect to MySQL:' .
                    mysqli_connect_error());
				if($class=='economy')
				{
					$query="UPDATE Flight_Details SET seats_economy=seats_economy-? WHERE flight_no=? AND departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"iss",$no_of_pass,$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					$affected_rows_1=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows_1.'<br>';
					mysqli_stmt_close($stmt);
					// $query1="INSERT INTO `Ticket_Details` (`pnr`,`date_of_reservation`,`flight_no`,`journey_date`,`class`,`booking_status`,`no_of_passengers`,`priority_checkin`,`payment_id`) VALUES ('$pnr','$payment_date','$flight_no','$journey_date','$class','$booking_sta','$no_of_pass','$priority_check','$payment_id')";
					$query1="INSERT INTO `Ticket_Details` (`pnr`,`date_of_reservation`,`flight_no`,`journey_date`,`class`,`booking_status`,`no_of_passengers`,`payment_id`,`customer_id`) VALUES ('$pnr','$payment_date','$flight_no','$journey_date','$class','$booking_sta','$no_of_pass','$payment_id','$customer_id')";
					$resultquery1 = mysqli_query($dbc,$query1);
					if($resultquery1){
                        echo "created";
                    }
                    else{
                       echo "error is " ;
                       echo mysqli_error($dbc);
                    }
				}
				// `lounge_access` varchar(5) DEFAULT NULL,
				// `priority_checkin` varchar(5) DEFAULT NULL,
				// `insurance` varchar(5) DEFAULT NULL,
				// `payment_id` varchar(20) DEFAULT NULL,
				// `customer_id`
				else if($class=='business')
				{
					$query="UPDATE Flight_Details SET seats_business=seats_business-? WHERE flight_no=? AND departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"iss",$no_of_pass,$flight_no,$journey_date);
					mysqli_stmt_execute($stmt);
					$affected_rows_1=mysqli_stmt_affected_rows($stmt);
					echo $affected_rows_1.'<br>';
					mysqli_stmt_close($stmt);
					$query2="INSERT INTO `Ticket_Details` (`pnr`,`date_of_reservation`,`flight_no`,`journey_date`,`class`,`booking_status`,`no_of_passengers`,`payment_id`,`customer_id`) VALUES ('$pnr','$payment_date','$flight_no','$journey_date','$class','$booking_sta','$no_of_pass','$payment_id','$customer_id')";
					$resultquery2 = mysqli_query($dbc,$query2);
					if($resultquery2){
                        echo "created rey2";
                    }
                    else{
                       echo "rey2 error is " ;
                       echo mysqli_error($dbc);
                    }
				}

				if($resultquery1 OR $resultquery2)
				{
					echo "Successfully Updated Seats<br>";

					$query="INSERT INTO `Payment_Details` (`payment_id`,`pnr`,`payment_date`,`payment_amount`,`payment_mode`) VALUES ('$payment_id','$pnr','$payment_date','$total_amount','$payment_mode')";
                    $resultquery = mysqli_query($dbc,$query);
                    if($resultquery){
                        echo "created rey";
                    }
                    else{
                       echo "rey error is " ;
                       echo mysqli_error($dbc);
                    }
					// $stmt=mysqli_prepare($dbc,$query);
					// mysqli_stmt_bind_param($stmt,"sssis",$payment_id,$pnr,$payment_date,$total_amount,$payment_mode);
					// mysqli_stmt_execute($stmt);
					// $affected_rows_2=mysqli_stmt_affected_rows($stmt);
					// echo $affected_rows_2.'<br>';
					// mysqli_stmt_close($stmt);
					if($resultquery)
					{
						echo "Successfully Updated Payment Details<br>";
						header('location:ticket_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error();
					}
				}
				else
				{
					echo "Submit Error";
					echo mysqli_error();
				}
				mysqli_close($dbc);
			}
			else
			{
				echo "Payment request not received";
			}
		?>
	</body>
</html>