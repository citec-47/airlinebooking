<?php
	session_start();
?>
<html>
	<head>
		<title>Delete Flight Schedule Details</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Delete']))
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
					$departure_date=trim($_POST['departure_date']);
				}

				if(empty($data_missing))
				{
					// require_once('Database Connection file/mysqli_connect.php');
                    DEFINE('DB_USER','root');
                    DEFINE('DB_PASSWORD','');
                    DEFINE('DB_HOST','localhost');
                    DEFINE('DB_NAME','flightjet');
    
                    $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                    OR dies('Could not connect to MySQL:' .
                        mysqli_connect_error());
					$query="DELETE FROM Flight_Details WHERE flight_no=? AND departure_date=?";
					$stmt=mysqli_prepare($dbc,$query);
					mysqli_stmt_bind_param($stmt,"ss",$flight_no,$departure_date);
					mysqli_stmt_execute($stmt);
					$affected_rows=mysqli_stmt_affected_rows($stmt);
					mysqli_stmt_close($stmt);
					if($affected_rows==1)
					{
						echo "Successfully Deleted";
						header("location: delete_flight_details.php?msg=success");
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error($dbc);
						header("location: delete_flight_details.php?msg=failed");
					}
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
				echo "Delete request not received";
			}
		?>
	</body>
</html>