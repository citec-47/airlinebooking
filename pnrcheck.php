<?php

    session_start();
    error_reporting(0);

$con=mysqli_connect("localhost","root","","flightjet");
$q=mysqli_query($con,"select pnr,flight_no,journey_date, class, booking_status, no_of_passengers,payment_id, customer_id from ticket_details where pnr='".$_SESSION['user']."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['pnr'];
$flight_no= $n['flight_no'];
$journey_date= $n['journey_date'];
$class= $n['class'];
$booking_status= $n['booking_status'];
$no_of_passengers= $n['no_of_passengers'];
$payment_id= $n['payment_id'];
$customer_id= $n['customer_id'];

echo "
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>Print ticket</title>
        
         <link rel=\"stylesheet\" href=\"bootstrap/bootstrap.min.css\">
         <link rel=\"stylesheet\" href=\"bootstrap/bootstrap-theme.min.css\">
         <link rel=\"stylesheet\" href=\"bootstrap/bootstrap.min.css\">
         <link rel=\"stylesheet\" href=\"bootstrap/bootstrap-theme.min.css\">
         <link rel=\"stylesheet\" type=\"text/css\" href=\"css/style.css\"/>
		<link rel=\"stylesheet\" href=\"font-awesome-4.7.0\css\font-awesome.min.css\">
		<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"./assets/css/bootstrap.css\">
  
  <link rel=\"stylesheet\" href=\"./assets/css/maicons.css\">

  <link rel=\"stylesheet\" href=\"./assets/vendor/animate/animate.css\">

  <link rel=\"stylesheet\" href=\"./assets/vendor/owl-carousel/css/owl.carousel.css\">

  <link rel=\"stylesheet\" href=\"./assets/vendor/fancybox/css/jquery.fancybox.css\">

  <link rel=\"stylesheet\" href=\"./assets/css/theme.css\">
       <script src=\"bootstrap/jquery.min.js\"></script>
        <script src=\"bootstrap/bootstrap.min.js\"></script>  
       <script src=\"bootstrap/jquery.min.js\"></script>
        <script src=\"bootstrap/bootstrap.min.js\"></script>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"css/admform.css\"></link>
        
        <script type=\"text/javascript\">
            function printpage()
            {
            var printButton = document.getElementById(\"print\");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
    </head>
    <body>
    <header>
<nav class=\"navbar navbar-expand-lg navbar-light \" >
      <div class=\"container\">
        <a href=\"index.php\" class=\"navbar-brand\">Flight<span class=\"text-primary\">jet</span></a>

        <button class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\"#navbarContent\" aria-controls=\"navbarContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>

        <div class=\"navbar-collapse collapse\" id=\"navbarContent\">
          <ul class=\"navbar-nav ml-auto pt-3 pt-lg-0\">
            <li class=\"nav-item active\">
              <a href=\"customer_homepage.php\" class=\"nav-link\">Home</a>
            </li>
            <li class=\"nav-item disabled\">
              <a href=\"aboutus.php\" class=\"nav-link\">About Us</a>
            </li>
          </ul>
          <div class=\"sign_btn\" style=\"margin-left:40px\"><a href=\"profileview.php\"><img src=\"./Formcss/Images/profileIcon2.png\" alt=\"\"></a></div>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
    </header>
<center><h3>Airpot Authority of Cameroon</h3></center>
<center><h2>Boarding Pass - Flight Reservation Slip</h2></center><h4><?php echo $booking_status;?></h4>
<br>
<br>
<br>
<br>

";


$id=$_SESSION['user'];

$result = mysqli_query($con,"SELECT * FROM passengers WHERE pnr='".$_SESSION['user']."'");
                   
                    while($row = mysqli_fetch_array($result))
                      {
                        ?> 


         
  <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
              
                
                <center><font style="font-family:Verdana; font-size:18px;">
                   
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
		
                   </font></center>
                </td>
                    <td colspan="2" width="3%" >
                   <?php
                  
                    $picfile_path ='images/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM passengers where ='".$_SESSION['user']."'");

                   ?>
                        </td>

                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">PNR : </font> </td>
                    <td style="width:8%;" colspan="3"> <?php echo $stname;?> </td>
                 </tr>

                 <tr>
                    <td> <font style="font-family: Verdana;">Booking Status </font> </td>
                    <td colspan="3"> <?php echo ''. $booking_status. '   ' ?>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Flight Number </font> </td>
                    <td colspan="3"> <?php echo ''. $flight_no. '   ' ?>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Flight Number </font> </td>
                    <td colspan="3"> <?php echo ''. $class. '   ' ?>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Date of Journey</font> </td>
                    <td colspan="3"> <?php echo ''.$journey_date. '   ' ?>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Passenger No : </font> </td>
                    <td colspan="3"> <?php echo ''. $row[0]. '   ' ?>
                </tr>
                  
                  <tr>
                    <td > <font style="font-family: Verdana;"> Name</font>  </td>
                    <td colspan="3"> <?php echo ''. $row[2]. '   ' ?><br>
                   </td>
                  </tr>
                
                  <tr>
                    <td><font style="font-family: Verdana;"> Age</font></td>
                    <td  colspan="3"> <?php echo ''.$row[3]. '   '  ?> </td>
                   </tr>

                  <tr>
                    <td><font style="font-family: Verdana;"> Gender</font></td>
                    <td  colspan="3"><?php echo $row[4] ?> </td>
                   </tr>
                 
                  <tr>
                    <td> <font style="font-family: Verdana;">Meal Choice</font></td>
                    <td> <?php echo $row[5] ?></td>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Booked by (Username)</font></td>
                    <td> <?php echo $customer_id ?></td>
                </tr>
                <tr>
                    <td> <font style="font-family: Verdana;">Payment Id</font></td>
                    <td> <?php echo $payment_id ?></td>
                </tr>
                <tr>
                    <td><font style="font-family: Verdana;"> Frequent Flier No. (If any)</font></td>
                    <td> <?php echo $row[6] ?> </td>
                    </tr>
                  
                
                
                
                 
                       </table></center>
                               </div>
                            </div>
            </div>
        <?php
              }
        ?>
    <center> <input type="submit" id="print" class="toggle btn btn-primary" value="Print" onclick="printpage();"></center>
<CENTER><a href="pnr.php">Check other PNR</a></center>
    </body>
</html>


 
            
    </body>
</html>


                     