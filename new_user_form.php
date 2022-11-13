<html>
	<head>
		<title>Add New User</title>
	</head>
	<body>
		<?php
			if(isset($_POST['Submit']))
			{
				$data_missing=array();
				if(empty($_POST['username']))
				{
					$data_missing[]='User Name';
				}
				else
				{
					$user_name=trim($_POST['username']);
				}
				if(empty($_POST['password']))
				{
					$data_missing[]='Password';
				}
				else
				{
					$password=$_POST['password'];
				}
				if(empty($_POST['email']))
				{
					$data_missing[]='Email ID';
				}
				else
				{
					$email_id=trim($_POST['email']);
				}

				if(empty($_POST['name']))
				{
					$data_missing[]='Name';
				}
				else
				{
					$name=$_POST['name'];
				}
				if(empty($_POST['phone_no']))
				{
					$data_missing[]='Phone No.';
				}
				else
				{
					$phone_no=trim($_POST['phone_no']);
				}
				if(empty($_POST['address']))
				{
					$data_missing[]='Address';
				}
				else
				{
					$address=$_POST['address'];
				}
				if(empty($_POST['passport']))
				{
					$data_missing[]='passport';
				}
				else
				{
					$passport=$_POST['passport'];
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

					$query="INSERT INTO `customer` (`customer_id`,`pwd`,`name`,`email`,`phone_no`,`address`,`passport`) VALUES ('$user_name','$password','$name','$email_id','$phone_no','$address','$passport')";
					$result=mysqli_query($dbc,$query);
					if ( false===$result ) {
						printf("error: %s\n", mysqli_error($dbc));
					  }

					if($result==1)
					{
						header('location:user_reg_success.php');
					}
					else
					{
						echo "Submit Error";
						echo mysqli_error($dbc);
						mysqli_close($dbc);
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
				echo "Submit request not received";
			}
		?>
	</body>
</html>