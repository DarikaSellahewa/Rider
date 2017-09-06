<?php
include "dbConnection.php";
$error="";

function validate_driver($username){
	 $rows=0;
	 $connection=open_database_connection();
	 $selectQuery="SELECT * from driver_login where username=".$username;
	if( $query=mysqli_query($connection,$selectQuery)){
		$rows = mysqli_num_rows($query);
		echo $rows;
	}	 
	return $rows;
	 
 }
 
 function insert_driver_details($f_name,$s_name,$dob,$lNo,$aNo,$street_name,$htown,$min_fee){
	 $connection=open_database_connection();
	 $insertQuery="INSERT INTO taxi_driver (first_name ,last_name ,date_of_birth ,liscense_no ,apt_number,street_name ,home_town ,min_fee,availability ) values ('$f_name','$s_name','$dob','$lNo','$aNo','$street_name','$htown','$min_fee',false)";
	 $query=mysqli_query($connection,$insertQuery); 
	 
	 if ($query) {
		$error=$f_name." sign up successfully";
		include "driverFirst.html.php";
	} else {
		$error="Error:insert driver details " . $query . "<br>" . mysqli_error($connection);
		include "driverFirst.html.php";
	}
 }
 
 function insert_driver_login($username,$password){
	 $connection=open_database_connection();
	 $count=driver_number();
	 $insertQuery="INSERT INTO driver_login (username,password,driver_id) VALUES ('$username','$password','$count')";
	 $query=mysqli_query($connection,$insertQuery); 
	 
	 if ($query) {
		$error="You sign in successfully";
		include "driverFirst.html.php";
	} else {
		$error="Error: driver login" . $query . "<br>" . mysqli_error($connection);
		include "driverFirst.html.php";
	}
 }
 
 function driver_number(){
	 $row=0;
	 $id=0;
	 $connection=open_database_connection();
	 $selectQuery="SELECT max(driver_id) as max_id from taxi_driver ";
	 if( $query=mysqli_query($connection,$selectQuery)){ 
	
		$row=mysqli_fetch_row($query);
		$id=$row[0];
	 }
	 return $id;
	 
 }
 