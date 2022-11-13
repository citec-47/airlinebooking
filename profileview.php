<?php
	session_start();
	if($_SESSION['login_user']==null){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Profile</title>
    <style>
        body {
    background: rgb(99, 39, 120)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(99, 39, 120);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

</head>
<body>
    <?php
    DEFINE('DB_USER','root');
    DEFINE('DB_PASSWORD','');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','flightjet');

    $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
      }
      echo "
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
          </header>";
      $temp =$_SESSION['login_user'];
      $query="SELECT * FROM `customer` WHERE customer_id='".$temp."'";
      $result = mysqli_query($dbc, $query);
      $num = mysqli_num_rows($result);
      $data = mysqli_fetch_assoc($result);
    echo"
    <div class=\"container rounded bg-white mt-5 mb-5\">
    <div class=\"row\">
        <div class=\"col-md-3 border-right\">
            <div class=\"d-flex flex-column align-items-center text-center p-3 py-5\"><img class=\"rounded-circle mt-5\" width=\"150px\" src=\"https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg\"><span class=\"font-weight-bold\">".$temp."</span><span class=\"text-black-50\">".$data['email']."</span><span> </span></div>
        </div>
        <div class=\"col-md-5 border-right\">
            <div class=\"p-3 py-5\">
                <div class=\"d-flex justify-content-between align-items-center mb-3\">
                    <h4 class=\"text-right\">Profile Settings</h4>
                </div>
                <div class=\"row mt-2\">
                    <div class=\"col-md-6\"><label class=\"labels\">Name</label><div class=\"form-control\" >
                    ".$data['name']."
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-md-6\"><label class=\"labels\">Phone Number</label><div class=\"form-control\" >
                    ".$data['phone_no']."
                    </div>
                </div>

                <div class=\"row mt-3\">
                    <div class=\"col-md-6\"><label class=\"labels\">Passport</label><div class=\"form-control\" >
                    ".$data['passport']."
                    </div>
                </div>
            </div>
                <div class=\"row mt-3\">
                        <div class=\"col-md-6\"><label class=\"labels\">Address</label><div class=\"form-control\" >
                        ".$data['address']."
                        </div>
                    </div>
                
                  
                <div onclick=\"location.href = 'change_profile.php';\"  class=\"mt-5 text-center\"><button class=\"btn btn-primary profile-button\" type=\"button\">Edit Profile</button></div>
                <a  href=\"logout.php\" class=\"mt-5 text-center\"><button class=\"btn btn-danger profile-button\" type=\"button\">Log Out</button></a>
                
            </div>
        </div>
    </div>
</div>";
    ?>

</body>
</html>


