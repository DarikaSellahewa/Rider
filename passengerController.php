<?php
include "passengerModel.php";

if (isset($_POST['submit'])) {
	if (empty($_POST['passengerName']) || empty($_POST['aptNo']) || empty($_POST['streetName']) || empty($_POST['homeTown']) || empty($_POST['userName']) || empty($_POST['password']) || empty($_POST['re_password'])) {
	$error = "Please fill all the fields ";
	include "passengerError.php";
	}
	else
	{
	$connection=open_database_connection();
	$name=mysqli_real_escape_string($connection,$_POST['passengerName']);
	$aNo=mysqli_real_escape_string($connection,$_POST['aptNo']);
	$street_name=mysqli_real_escape_string($connection,$_POST['streetName']);
	$htown=mysqli_real_escape_string($connection,$_POST['homeTown']);
	$username=mysqli_real_escape_string($connection,$_POST['userName']);
	$password=mysqli_real_escape_string($connection,$_POST['password']);
	$re_password=mysqli_real_escape_string($connection,$_POST['re_password']);
	
	$count=validate_passenger($username);
	
	if($count==0 ){
		if( $password==$re_password){
			insert_passenger_details($name,$aNo,$street_name,$htown);
			insert_passenger_login($username,$password);
		}else{
			$error="You have enetered different passwords .Please enter correct password and re submit the form .";
			include "passengerError.php";
		}
	}else{
		$error="Error: inside else " .mysqli_error($connection)."User name is already registered .Try with another user name .";
		include "passengerError.php";
	}	

	header("location:passengerFirst.php");	
	}
}

//}