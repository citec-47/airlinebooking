
<?php
$servername = "localhost";
$username = "root";
$password = "";
$connect = mysqli_connect($servername,$username,$password);

//-----------------------------------------------  DATABASE CREATION  -------------------------------

$sql = "CREATE DATABASE flightjet";
$x = mysqli_query($connect,$sql);
// if(!($x)){
//   echo "Database was not created successfully because of this error: ".mysqli_error($connect);
// }
$db='flightjet';
$conn =mysqli_connect($servername,$username,$password,$db);

//-----------------------------------------------  adminlogins CREATION  -------------------------------


$y="CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` varchar(20) NOT NULL,
  `pwd` varchar(30) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL
)";

$result = mysqli_query($conn,$y);
if(!$result){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}

 $addtoAdmin = "INSERT INTO  `admin` (`admin_id`, `pwd`, `staff_id`, `name`, `email`)
 SELECT * FROM(SELECT 'admin', 'Admin#123', 'adminID', 'AdminName', 'admin1234@gmail.com' ) As tmp
WHERE NOT EXISTS(
  SELECT `pwd` FROM `admin` WHERE pwd = 'Admin#123'
) LIMIT 1";

$result1 = mysqli_query($conn,$addtoAdmin);

$addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
SELECT * FROM (SELECT 'AA101', 'bangalore', 'mumbai', '2021-11-01', '2021-12-02', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001') AS tmp
WHERE NOT EXISTS(
  SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA101'
)LIMIT 1";
$result4 = mysqli_query($conn,$addFliDet);



//-----------------------------------------------  customerlogins CREATION  -------------------------------

$y1 = "CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` varchar(20) NOT NULL,
  `pwd` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(35) DEFAULT NULL,
  `passport` varchar(35) DEFAULT NULL
)";

$result2 = mysqli_query($conn,$y1);

//-----------------------------------------------  flight details CREATION  -------------------------------


$flightDet ="	CREATE TABLE IF NOT EXISTS `flight_details` (
  `flight_no` varchar(10) NOT NULL,
  `from_city` varchar(20) DEFAULT NULL,
  `to_city` varchar(20) DEFAULT NULL,
  `departure_date` date NOT NULL,
  `arrival_date` date DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `seats_economy` int(5) DEFAULT NULL,
  `seats_business` int(5) DEFAULT NULL,
  `price_economy` int(10) DEFAULT NULL,
  `price_business` int(10) DEFAULT NULL,
  `jet_id` varchar(10) DEFAULT NULL
  )";

  $result3 = mysqli_query($conn,$flightDet);
  if(!$result3){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA101', 'bangalore', 'mumbai', '2021-12-01', '2021-12-02', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA101'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet);

  $addFliDet1 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA111', 'chennai', 'rajahmundry', '2021-12-26', '2021-12-27', '21:00:00', '01:00:00', '195', '96', '5000', '7500', '10001') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA111'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet1);

  $addFliDet2 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA102', 'bangalore', 'delhi', '2021-12-01', '2021-12-05', '10:00:00', '12:00:00', '200', '73', '2500', '3000', '10002') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA102'
  )LIMIT 1";
  $result5 = mysqli_query($conn,$addFliDet2);

  $addFliDet3 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA103', 'bangalore', 'chennai', '2021-12-03', '2021-12-04', '17:00:00', '17:45:00', '150', '75', '1200', '1500', '10004') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA103'
  )LIMIT 1";
  $result6 = mysqli_query($conn,$addFliDet3);

  $addFliDet4 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA104', 'bangalore', 'mysore', '2021-12-04', '2021-12-4', '09:00:00', '09:17:00', '37', '4', '500', '750', '10003') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA104'
  )LIMIT 1";
  $result7 = mysqli_query($conn,$addFliDet4);

  $addFliDet1 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AA106', 'bangalore', 'hyderabad', '2021-12-01', '2021-12-02', '13:00:00', '14:00:00', '150', '75', '3000', '3750', '10004') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AA106'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet1);

  $addFliDet2 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AIR707MXPA', 'Delhi', 'Germany', '2021-12-01', '2021-12-1', '10:00:00', '18:00:00', '232', '128', '7500', '12000', 'AIR707MAX') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AIR707MXPA'
  )LIMIT 1";
  $result5 = mysqli_query($conn,$addFliDet2);
  
  $addFliDet3 = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AIRBUS69BA', 'Hyderabad', 'Newyork', '2021-12-31', '2022-1-1', '10:00:00', '13:00:00', '69', '89', '6500', '7800', 'AIRBUS69') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AIRBUS69BA'
  )LIMIT 1";
  $result6 = mysqli_query($conn,$addFliDet3);

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AIRBUS707P', 'Chennai', 'Tokyo', '2021-12-19', '2021-12-19', '00:00:00', '18:00:00', '75', '65', '6969', '7856', 'AIRBUS707') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AIRBUS707P'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet);

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AIRBUS70BA', 'mumbai', 'berlin', '2021-11-19', '2021-11-29', '10:00:00', '15:00:00', '523', '76', '4523', '8652', 'AIRBUS70') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AIRBUS70BA'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet);

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'AIRBUS70PA', 'bangalore', 'london', '2021-11-20', '2021-11-22', '10:01:00', '18:00:00', '498', '65', '5788', '6966', 'AIRBUS70') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no ='AIRBUS70PA'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet);

  $addFliDet = "INSERT INTO `Flight_details` (`flight_no`, `from_city`, `to_city`, `departure_date`, `arrival_date`, `departure_time`, `arrival_time`, `seats_economy`, `seats_business`, `price_economy`, `price_business`, `jet_id`) 
  SELECT * FROM (SELECT 'BOING707PA', 'Agra', 'Paris', '2021-11-25', '2021-11-26', '10:00:00', '13:00:00', '400', '21', '4500', '7000', 'BOING707') AS tmp
  WHERE NOT EXISTS(
    SELECT `flight_no` FROM `Flight_details` WHERE flight_no = 'BOING707PA'
  )LIMIT 1";
  $result4 = mysqli_query($conn,$addFliDet);


//-----------------------------------------------  ticket details CREATION  -------------------------------

$ticketDet =" CREATE TABLE IF NOT EXISTS `ticket_details` (
    `pnr` varchar(15) NOT NULL,
    `date_of_reservation` date DEFAULT NULL,
    `flight_no` varchar(10) DEFAULT NULL,
    `journey_date` date DEFAULT NULL,
    `class` varchar(10) DEFAULT NULL,
    `booking_status` varchar(20) DEFAULT NULL,
    `no_of_passengers` int(5) DEFAULT NULL,
    `payment_id` varchar(20) DEFAULT NULL,
    `customer_id` varchar(20) DEFAULT NULL
  )";

  $result5 = mysqli_query($conn,$ticketDet);
  if(!$result5){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }

  $var1 ='yes';
  $var2 = 'no';
  $addtickets = "INSERT INTO `ticket_details` (`pnr`, `date_of_reservation`, `flight_no`, `journey_date`, `class`, `booking_status`, `no_of_passengers`, `payment_id`, `customer_id`)
  SELECT * FROM (SELECT '1669050', '2021-11-25', 'AA104', '2021-12-04', 'business', 'CONFIRMED', 3,'620041544', 'harryroshan') AS tmp
  WHERE NOT EXISTS(
    SELECT `pnr` FROM `ticket_details` WHERE pnr = '1669050' 
  )LIMIT 1";
  $ticketsresult = mysqli_query($conn,$addtickets);
  if(!$ticketsresult){
    echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
  }


//-----------------------------------------------  passenger details CREATION  -------------------------------

$tablepassengers = "CREATE TABLE IF NOT EXISTS `passengers` (
  `passenger_id` int(10) NOT NULL,
  `pnr` varchar(15) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `gender` varchar(8) DEFAULT NULL,
  `meal_choice` varchar(5) DEFAULT NULL,
  `frequent_flier_no` varchar(20) DEFAULT NULL
)";
$result7 = mysqli_query($conn,$tablepassengers);
if(!$result7){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '1669050', 'Harry Roshan', 20, 'male', 'yes', '20002000') AS tmp
WHERE NOT EXISTS(
  SELECT `pnr` FROM `passengers` WHERE pnr = '1669050' AND name ='Harry Roshan'
)LIMIT 1";
$pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '2033264', 'Rakhi', 25, 'female', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
  SELECT `pnr` FROM `passengers` WHERE pnr = '2033264' AND name ='Rakhi'
)LIMIT 1";
$pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '3817993', 'Sanchit Kumar', 23, 'male', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
    SELECT `pnr` FROM `passengers` WHERE pnr = '3817993' AND name = 'Sanchit Kumar'
  )LIMIT 1";
  $pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '4797983', 'Sanjeev', 23, 'male', 'yes', '10001000') AS tmp
WHERE NOT EXISTS(
  SELECT `pnr` FROM `passengers` WHERE pnr = '4797983' AND name ='Sanjeev'
)LIMIT 1";
$pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '1669050', 'Keerthi', 45, 'female', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
    SELECT `pnr` FROM `passengers` WHERE pnr = '1669050' AND name ='Keerthi'
  )LIMIT 1";
  $pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 2, '3773951', 'berti', 42, 'female', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
  SELECT `pnr` FROM `passengers` WHERE pnr =  '3773951' AND name ='berti'
)LIMIT 1";
$pasresult = mysqli_query($conn,$addpassengers);

$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 1, '4797983', 'Sanjeev', 23, 'male', 'yes', '10001000') AS tmp
WHERE NOT EXISTS(
    SELECT `pnr` FROM `passengers` WHERE pnr = '4797983' AND name ='Sanjeev'
  )LIMIT 1";
  $pasresult = mysqli_query($conn,$addpassengers);
   
$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 3, '4807312', 'SURESH', 22, 'male', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
  SELECT `pnr` FROM `passengers` WHERE pnr = '4807312' AND name ='SURESH'
)LIMIT 1";
$pasresult = mysqli_query($conn,$addpassengers);
   
$addpassengers = "INSERT INTO `passengers` (`passenger_id`, `pnr`, `name`, `age`, `gender`, `meal_choice`, `frequent_flier_no`)
SELECT * FROM (SELECT 2, '9288360', 'SHUBHAM KUMAR', 24, 'male', 'yes', NULL) AS tmp
WHERE NOT EXISTS(
    SELECT `pnr` FROM `passengers` WHERE pnr = '9288360' AND name ='SHUBHAM KUMAR'
  )LIMIT 1";
  $pasresult = mysqli_query($conn,$addpassengers);



//-----------------------------------------------  payment details CREATION  -------------------------------

$payment_detailsTable = "CREATE TABLE IF NOT EXISTS `payment_details` (
  `payment_id` varchar(20) NOT NULL,
  `pnr` varchar(15) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` int(6) DEFAULT NULL,
  `payment_mode` varchar(15) DEFAULT NULL
)";
$result9 = mysqli_query($conn,$payment_detailsTable);
if(!$result9){
  echo "The authors table was not created successfully because of this error ---> ". mysqli_error($conn);
}

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '120000248', '4797983', '2019-11-25', 4200, 'credit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '120000248' AND pnr ='4797983'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '142539461', '3773951', '2019-11-5', 4050, 'credit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '142539461' AND pnr ='3773951'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '423519897', '2033264', '2019-08-17', 6638, 'credit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '423519897' AND pnr ='2033264'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '165125569', '8503285', '2019-11-25', 7500, 'net banking') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id =  '165125569' AND pnr ='8503285'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '620041544', '1669050', '2019-11-25', 4800, 'debit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '620041544' AND pnr ='1669050'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '557778944', '6980157', '2019-11-26', 11700, 'credit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '557778944' AND pnr ='6980157'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '467972527', '2369143', '2019-11-26', 33400, 'debit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id = '467972527' AND pnr ='2369143'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);

$payment_detailsinsert = "INSERT INTO `payment_details` (`payment_id`, `pnr`, `payment_date`, `payment_amount`, `payment_mode`) 
SELECT * FROM (SELECT '460571289', '9572357', '2019-08-19', 25700, 'debit card') AS tmp
WHERE NOT EXISTS(
  SELECT `payment_id` FROM `payment_details` WHERE payment_id =  '460571289' AND pnr ='9572357'
)LIMIT 1";
$insertpayment = mysqli_query($conn,$payment_detailsinsert);
?>