<?php
include "dbConnection.php";

$connection=open_database_connection();

function search_passenger_id($username){
	$connection=open_database_connection();
	$id=0;
	$selectQuery="SELECT passenger_id FROM passenger_login WHERE username='$username'";
	
	if( $query=mysqli_query($connection,$selectQuery)){ 
	
		$row=mysqli_fetch_row($query);
		$id=$row[0];
	 }else{
		 echo "Error ".mysqli_error($connection);
	 }
	 return $id;
}

function insert_passenger_request($passenger_id,$pickup_location,$dropoff_location,$split_fare,$max_payment,$tour_date,$tour_time,$taxi_type){
	$connection=open_database_connection();
	$setQuery1="SET foreign_key_checks=0";
	mysqli_query($connection,$setQuery1);
	$insertQuery="INSERT INTO passenger_request (passenger_id,pickup_location,dropoff_location,split_fare,max_payment,tour_date,tour_time,taxi_type) VALUES ('$passenger_id','$pickup_location','$dropoff_location','$split_fare','$max_payment','$tour_date','$tour_time','taxi_type')";
	$query=mysqli_query($connection,$insertQuery);
	$setQuery2="SET foreign_key_checks=1";
	mysqli_query($connection,$setQuery2);
	 
	 if (!$query) {
		 echo "Error arose ".mysqli_error($connection);
	 }	 
}

function display_driver_fee(){
	$connection=open_database_connection();
	$sql = "SELECT first_name,min_fee FROM taxi_driver WHERE availability=true";
	$result = mysqli_query($connection,$sql);
	$rows = mysqli_num_rows($result);

		if ($rows > 0) {
			 // output data of each row
			 while($row = mysqli_fetch_assoc($result)) {
				  
				// echo "<br>". $row["first_name"]. "      Min_fee". $row["min_fee"]. " " . "<br>";
				 $firstnames[]=$row["first_name"];
				 $minfee[]=$row["min_fee"];
			 }
		} else {
			 echo "0 results";
		}
		
		include "tourResponse.php";
		return result;
}


function check_driver_availability(){
	$connection=open_database_connection();
    $sql = "SELECT driver_id from driver_reservation where r";
	$result = mysqli_query($connection,$sql);
	$driver_status = display_driver_fee();
	
}

