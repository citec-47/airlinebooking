

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <title>Customer Signup</title>
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
						 <li class="nav-item">
                            <a class="nav-link" href="login_page.php">Login</a>
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
                    <h2>SIGNUP AS CUSTOMER</h2>
                    <span>Fill Both The Forms And SignUp Into Our Website</span>
					<p>(Passenger ID is nothing but Username)</p>
                 </div>
              </div>
           </div>

           <div class="row">
              <div class="col-md-4">
                 <form id="request" class="main_form" action="new_user_form.php" method="POST"  style="border-radius: 20px;background:#212c67;margin-top:70px;width:500px" >
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" type="text" name="username" placeholder="Enter your passenger ID" required> 
                       </div>
					   <div class="col-md-12">
					   <input class="contactus" type="password" name="password" placeholder="Enter your password" required>                        
                       </div>
					   <div class="col-md-12">
					   <input class="contactus" type="text" name="email"  placeholder="Enter your Email ID" required>                        
                       </div>

                    </div>
                    <div class="row">
                       <div class="col-md-12 ">
                          <input class="contactus" type="text" name="name" placeholder="Enter Your Full Name" required> 
                       </div>
                       <div class="col-md-12">
					   <input class="contactus" type="text" name="passport"  placeholder="Enter Your passport number" required>                        
                       </div>
                       <div class="col-md-12">
					   <input class="contactus" type="text" name="phone_no" placeholder="Enter Your Phone Number" required>                        
                       </div>
					   <div class="col-md-12">
					   <input class="contactus" type="text" name="address"  placeholder="Enter Your Address" required>                        
                       </div>
                       <div class="col-sm-12">
					   <input class="send_btn" type="submit" value="Submit" name="Submit">
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
