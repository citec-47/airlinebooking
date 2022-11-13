

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Customer Login</title>
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
    
   </head>
<body>
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
    <div class="request">
        <div class="container" >
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>LOGIN AS CUSTOMER</h2>
                    <span>Enter The Correct Details Here And Login Into Our Website</span>
                 </div>
              </div>
           </div>
		   <?php
					if(isset($_GET['msg']) && $_GET['msg']=='failed')
					{
						echo "<br>
						<strong style='color:red;font-size:45px'>Invalid Username/Password</strong>
						<br><br>";
					}
						?>
           <div class="row">
              <div class="col-md-4">
                 <form id="request" class="main_form" style="border-radius: 20px;background:#212c67;margin-top:70px" action="login_verify.php" method="POST">
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" type="text" name="username" placeholder="Enter your passenger ID" required> 
                       </div>
                       <div class="col-md-12">
					   <input class="contactus" type="password" name="password" placeholder="Enter your password" required>                        
                       </div>
					   <strong style="color:#f6c2d7;">User Type:</strong>
			 <span style="color:#f6c2d7;">Customer</span>	 <input  type='radio' name='user_type' value='Customer' checked/>
				<br>
				<span style="color:#f6c2d7;">Administrator </span> <input style="color:f6c2d7;" type='radio' name='user_type' value='Administrator'/>

                       <div class="col-sm-12">
					   <input class="send_btn" type="submit" name="Login" value="Login">
                       </div>
                    </div>
                 </form>
              </div>

              <div class="col-md-8">
                 <div class="back_img">
                    <figure><img src="./Formcss/flightpng.png" alt="#"/></figure>
                 </div>
              </div>

						
           </div>
        </div>
     </div>
</body>
<script src="Formjs/jquery.min.js"></script>
<script src="Formjs/popper.min.js"></script>
<script src="Formjs/bootstrap.bundle.min.js"></script>
<script src="Formjs/jquery-3.0.0.min.js"></script>
<script src="Formjs/plugin.js"></script>
<!-- sidebar -->
<script src="Formjs/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="Formjs/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</html> 