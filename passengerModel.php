<?php
include "dbConnection.php";
$error="";

function validate_passenger($username){
	 $rows=0;
	 $connection=open_database_connection();
	 $selectQuery="SELECT * from passenger_login where username=".$username;
	if( $query=mysqli_query($connection,$selectQuery)){
		$rows = mysqli_num_rows($query);
		echo $rows;
	}	 
	return $rows;
	 
 }
 
 function insert_passenger_details($name,$aNo,$street_name,$htown){
	 $connection=open_database_connection();
	 $insertQuery="INSERT INTO passenger (passenger_name ,apt_number,street_name ,hometown ) values ('$name','$aNo','$street_name','$htown')";
	 $query=mysqli_query($connection,$insertQuery); 
	 
	 if ($query) {
		$error=$name." sign up successfully";
	} else {
		$error="Error:insert passenger details " . $query . "<br>" . mysqli_error($connection);
	}
 }
 
 function insert_passenger_login($username,$password){
	 $connection=open_database_connection();
	 $count=passenger_number();
	 $insertQuery="INSERT INTO passenger_login (username,password,passenger_id) VALUES ('$username','$password','$count')";
	 $query=mysqli_query($connection,$insertQuery); 
	 
	 if ($query) {
		$error="New record created successfully";
	} else {
		$error="Error: passenger login" . $query . "<br>" . mysqli_error($connection);
	}
 }
 
 function passenger_number(){
	 $row=0;
	 $id=0;
	 $connection=open_database_connection();
	 $selectQuery="SELECT max(passenger_id) from passenger ";
	 if( $query=mysqli_query($connection,$selectQuery)){
		$row=mysqli_fetch_row($query);
		$id=$row[0];
	 }
	 return $id;
	 
 }
 
 