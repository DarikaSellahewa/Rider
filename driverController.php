<?php
include "passengerDb.php";
$error="";

if (isset($_POST['submit'])) {
	if (empty($_POST['Name']) || empty($_POST['userName']) || empty($_POST['cNo']) || empty($_POST['password']) || empty($_POST['re_password'])) {
	$error = "Please fill all the fields ";
	include "driverError.html.php";	
	}
	else
	{

		$connection=open_database_connection();
		$name=mysqli_real_escape_string($connection,$_POST['Name']);
		$username=mysqli_real_escape_string($connection,$_POST['userName']);
		$aNo=mysqli_real_escape_string($connection,$_POST['cNo']);
		$password=mysqli_real_escape_string($connection,$_POST['password']);
		$re_password=mysqli_real_escape_string($connection,$_POST['re_password']);
		
		$count=validate_driver($username);
		
		if($count==0 ){
			if( $password==$re_password){
				insert_passehger_details($name,$cNo);
				insert_passenger_login($username,$password);
			}else{
				$error="You have enetered different passwords .Please enter correct password and re submit the form .";
				include "driverError.html.php";
			}
		}else{
			$error="Error: " .mysqli_error($connection). "User name is already registered .Try with another user name .";
			include "driverError.html.php";	
		}		

		header("location:driverFirst.html.php");
	}
}