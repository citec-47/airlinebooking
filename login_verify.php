<html>
	<head>
		<title>Login Verfication</title>
	</head>
	<body>
		<?php
			session_start();
			session_destroy();
			session_start();
			if(isset($_POST['Login']))
			{
				$data_missing=array();
				if(empty($_POST['username']))
				{
					$data_missing[]='Username';
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
					$pass_word=$_POST['password'];
				}
				if(empty($_POST['user_type']))
				{
					$data_missing[]='User Type';
				}
				else
				{
					$user_type=$_POST['user_type'];
					echo $user_type;
					$_SESSION['user_type']=$user_type;
				}

				if(empty($data_missing))
				{
					echo "outside";
					if($user_type=='Customer')
					{
						echo "entered into customer";
                        DEFINE('DB_USER','root');
                        DEFINE('DB_PASSWORD','');
                        DEFINE('DB_HOST','localhost');
                        DEFINE('DB_NAME','flightjet');
    
                        $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                        OR dies('Could not connect to MySQL:' .
                            mysqli_connect_error());

						$query="SELECT * FROM customer where customer_id='".$user_name."' and pwd='".$pass_word."'";
						$result123 = mysqli_query($dbc,$query);
						$final = mysqli_num_rows($result123);
                        if($final >0){
                            echo "you logined bro!!";
								echo "Logged in <br>";
								$_SESSION['login_user']=$user_name;
								echo $_SESSION['login_user']." is logged in";
								header("location: customer_homepage.php");
							
                        }
                        else{
                            echo "shit man!!";
							echo "Login Error";
							session_destroy();
							header('location:login_page.php?msg=failed');
                        }
                    }

					else if($user_type=='Administrator'){
						DEFINE('DB_USER','root');
                        DEFINE('DB_PASSWORD','');
                        DEFINE('DB_HOST','localhost');
                        DEFINE('DB_NAME','flightjet');
    
                        $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
                        OR dies('Could not connect to MySQL:' .
                            mysqli_connect_error());
							$query="SELECT * FROM admin where admin_id='".$user_name."' and pwd='".$pass_word."'";
							$result123 = mysqli_query($dbc,$query);
							$final = mysqli_num_rows($result123);
							if($final >0){
								echo "you logined bro!!";
									echo "Logged in <br>";
									$_SESSION['login_user']=$user_name;
									echo $_SESSION['login_user']." is logged in";
									header("location:admin_homepage.php");
								
							}
							else{
								echo "shit man!!";
								echo "Login Error";
								session_destroy();
								header('location:login_page.php?msg=failed');
							}
					}

                }

            }
                     
		?>
	</body>
</html>