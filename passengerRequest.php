<?php
include "passengerReqModel.php";


$error="";

if (isset($_POST['submit'])) {
if (empty($_POST['pickup_location']) || empty($_POST['dropoff_location']) || empty($_POST['split_fare']) || empty($_POST['max_payment']) || empty($_POST['tour_date']) || empty($_POST['tour_time']) || empty($_POST['taxi_type'])) {
$error = "Please fill all the fields ";
include "passengerError.php";
}
else
{
// Define $username and $password
//
$username=mysqli_real_escape_string($connection,$_POST['username']);
$pickup_location=mysqli_real_escape_string($connection,$_POST['pickup_location']);
$dropoff_location=mysqli_real_escape_string($connection,$_POST['dropoff_location']);
$split_fare=mysqli_real_escape_string($connection,$_POST['split_fare']);
$max_payment=mysqli_real_escape_string($connection,$_POST['max_payment']);
$tour_date=mysqli_real_escape_string($connection,$_POST['tour_date']);
$tour_time=mysqli_real_escape_string($connection,$_POST['tour_time']);
$taxi_type=mysqli_real_escape_string($connection,$_POST['taxi_type']);

$passenger_id=search_passenger_id($username);

insert_passenger_request($passenger_id,$pickup_location,$dropoff_location,$split_fare,$max_payment,$tour_date,$tour_time,$taxi_type);

header('location:driverStatus.php');
}
}



