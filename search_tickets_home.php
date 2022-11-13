<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>Airline Management System</title>

  <link rel="stylesheet" href="./assets/css/bootstrap.css">
  
  <link rel="stylesheet" href="./assets/css/maicons.css">

  <link rel="stylesheet" href="./assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="./assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="./assets/vendor/fancybox/css/jquery.fancybox.css">

  <link rel="stylesheet" href="./assets/css/theme.css">

</head>
<body>

  <!-- Back to top button -->

  <header>
     <nav class="navbar navbar-expand-lg navbar-light ">
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
            <li class="nav-item">
              <a href="aboutus.php" class="nav-link">About Us</a>
            </li>
        </div>
      </div> <!-- .container -->
    </nav> <!-- .navbar -->
</header>
<div class="container">
<div style="text-align: center;color: #ff1ec7;font-size: 30px;">
  Here you can see both domestic and international flights
</div>
<div style="text-align: center;color: #ff1ec7;font-size: 30px;">
  Enter some words to search available fligths
</div>
<form action="search_tickets.php" method="post" class="d-flex">
        <input class="form-control me-2" name="searchname" type="search" placeholder="Search (Case-sensitive)" aria-label="Search" required>
        <button class="btn btn-outline-success" style="margin-bottom:50px"  type="submit">Search</button>
</form>
<?php
	   DEFINE('DB_USER','root');
       DEFINE('DB_PASSWORD','');
       DEFINE('DB_HOST','localhost');
       DEFINE('DB_NAME','flightjet');

       $dbc=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME)
       OR dies('Could not connect to MySQL:' .
           mysqli_connect_error());

    $query = "SELECT * FROM `flight_details`";
    $resul = mysqli_query($dbc,$query);
    echo "<table cellpadding=\"10\" class=\"table\"";
    echo "<tr >
    <th scope=\"col\" style=\"color:#0070ff;\">Flight No.</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Origin</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Destination</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Departure Date</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Departure Time</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Arrival Date</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Arrival Time</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Seats Economy</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Seats Business</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Price Economy</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Price Business</th>
    <th  scope=\"col\" style=\"color:#0070ff;\">Jet ID</th>
    </tr>";
while($row = mysqli_fetch_assoc($resul)){
    echo "<div>
    <tr>
        <td scope=\"row\" >".$row['flight_no']."</td>
        <td >". $row['from_city']."</td>
    <td >".$row['to_city']."</td>
    <td >".$row['departure_date']."</td>
    <td>".$row['departure_time']."</td>
    <td>".$row['arrival_date']."</td>
    <td>".$row['arrival_time']."</td>
    <td>".$row['seats_economy']."</td>
    <td>".$row['seats_business']."</td>
    <td>".$row['price_economy']."</td>
    <td>".$row['price_business']."</td>
    <td>".$row['jet_id']."</td>
        </tr>
    </div>";
}
echo "</table> <br>";
?>
<br>
<br>

<br>
</div>
</body>
</html>