<?php
	session_start();
?>
<html>
	<head>
		<title>
			Cancel Booked Tickets
		</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Cancel_Ticket']))
			{
				$data_missing=array();
				if(empty($_POST['pnr']))
				{
					$data_missing[]='PNR';
				}
				else
				{
					$pnr=trim($_POST['pnr']);
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

					$todays_date=date('Y-m-d'); 
					$customer_id=$_SESSION['login_user'];

					$query="SELECT * from `Ticket_Details`  WHERE `pnr`='$pnr' and `customer_id`='$customer_id'";
					$result1 = mysqli_query($dbc,$query);
					$num = mysqli_num_rows($result1);
					if($num == 0){
						mysqli_close($dbc);
						header("location: cancel_booked_tickets.php?msg=failed");
					}
					if($cnt!=1)
					{
						mysqli_close($dbc);
						header("location: cancel_booked_tickets.php?msg=failed");
					}
					else{
						$query2="UPDATE `Ticket_Details` SET booking_status='CANCELLED' WHERE `pnr`='$pnr' and `customer_id`='$customer_id'";
						$result2 = mysqli_query($dbc,$query2);

						$query="SELECT t.flight_no,t.journey_date,t.no_of_passengers,t.class,0.85*p.payment_amount as refund_amount from Ticket_Details t,Payment_Details p WHERE t.pnr=? and t.pnr=p.pnr";
						$stmt=mysqli_prepare($dbc,$query);
						mysqli_stmt_bind_param($stmt,"s",$pnr);
						mysqli_stmt_execute($stmt);
						mysqli_stmt_bind_result($stmt,$flight_no,$journey_date,$no_of_pass,$class,$refund_amount);
						mysqli_stmt_fetch($stmt);
						mysqli_stmt_close($stmt);
						$_SESSION['refund_amount']=$refund_amount;
						echo $refund_amount;
					}
				}
			}
			else
			{
				echo "Cancel request not received";
			}

					if(1)
					{

						$_SESSION['refund_amount']=$refund_amount;
						if($class=='economy')
						{
							$query="UPDATE Flight_Details SET seats_economy=seats_economy+? WHERE flight_no=? AND departure_date=?";
							$stmt=mysqli_prepare($dbc,$query);
							mysqli_stmt_bind_param($stmt,"iss",$no_of_pass,$flight_no,$journey_date);
							mysqli_stmt_execute($stmt);
							$affected_rows_1=mysqli_stmt_affected_rows($stmt);
							echo $affected_rows_1.'<br>';
							mysqli_stmt_close($stmt);
						}
						else if($class=='business')
						{
							$query="UPDATE Flight_Details SET seats_business=seats_business+? WHERE flight_no=? AND departure_date=?";
							$stmt=mysqli_prepare($dbc,$query);
							mysqli_stmt_bind_param($stmt,"iss",$no_of_pass,$flight_no,$journey_date);
							mysqli_stmt_execute($stmt);
							$affected_rows_1=mysqli_stmt_affected_rows($stmt);
							echo $affected_rows_1.'<br>';
							mysqli_stmt_close($stmt);
						}
						if($affected_rows_1==1)
						{

							header("location: cancel_booked_tickets_success.php");
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
						header("location: cancel_booked_tickets.php?msg=failed");
					}
					mysqli_close($dbc);

		?>
	</body>
</html>