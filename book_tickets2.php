<?php
	session_start();
?>
<html>
	<head>
		<title>
			Enter Travel/Ticket Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 10px;
			}
			input[type=number] {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 0px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 500px
			}
			input[type=radio] {
    			margin-right: 30px;
			}
			select {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 6.5px 15px;
			}
		</style>
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
		<?php
			$no_of_pass=$_SESSION['no_of_pass'];
			$class=$_SESSION['class'];
			$count=$_SESSION['count'];
			$flight_no=$_POST['select_flight'];
			$_SESSION['flight_no']=$flight_no;
			echo "<h2 style=\"text-align: center;margin-top: 15px;margin-bottom:25px;color:red;font-weight:501;font-size:45px\">Please Fill The Passengers Details</h2>";
			
			echo "<form action=\"add_ticket_details_form_handler.php\" method=\"post\">";
			while($count<=$no_of_pass)
			{
				echo"
				<div class=\"page-section\">
      <div class=\"container\">
     
        <div class=\"text-center\" style=\"margin-top:-24px\">
          <h2 class=\"title-section mb-3\">PASSENGER ".$count."</h2>
        </div>
        <div class=\"row justify-content-center mt-5\">
          <div class=\"col-lg-8\">
           
              <div class=\"row\">

                <div class=\"col-sm-6 py-2\">
                  <label for=\"name\" style=\"color:#ff08b6;\">Enter The Name</label>
                  <input list=\"origins\" name=\"pass_name[]\" type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Name\" required>
                </div>

                <div class=\"col-sm-6 py-2\">
                  <label for=\"email\" style=\"color:#ff08b6;\">Enter The Age</label>
                  <input list=\"destinations\" name=\"pass_age[]\" style=\"padding:20px\"  type=\"number\" class=\"form-control\" id=\"email\" placeholder=\"Age\" required>
                </div>

                <div class=\"col-sm-6 py-2\">
                  <label for=\"message\" style=\"color:#ff08b6;\">Gender</label>
                  <br>
                  <select name=\"pass_gender[]\" class=\"col-sm-4 py-2 \" style=\"text-align:center\">
                  <option value=\"male\" >Male</option>
                  <option value=\"female\" >Female</option>
				  <option value=\"other\">Other</option>
                  </select>
                </div>

                <div class=\"col-sm-6 py-2\">
                  <label for=\"message\" style=\"color:#ff08b6;\">In Flight Meal</label>
                  <br>
                  <select name=\"pass_meal[]\" class=\"col-sm-4 py-2 \" style=\"text-align:center\">
                  <option value=\"yes\" >Yes</option>
                  <option value=\"no\" >No</option>
                  </select>
                </div>
              </div>
           
          </div>
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section -->";
					$count=$count+1;
				}

				echo "<input class=\"btn btn-primary px-5\" style=\"display:block;margin:auto\" type=\"submit\" value=\"Submit The Details\" name=\"Submit\">";
				echo "</form>";
		?>
		</body>
</html>