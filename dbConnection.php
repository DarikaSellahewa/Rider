<?php
$error="";

 function open_database_connection(){
   $link = mysqli_connect('localhost', 'root', 'W5miex#fx');
   mysqli_select_db( $link,'taxi_reservation_system');
   if (!$link)
	{
	$error = 'Unable to connect to the database server.';
	exit();
	}

   if (!mysqli_select_db($link, 'taxi_reservation_system'))
	{
	$error = 'Unable to locate the taxi_reservation_system database.';
	exit();
	}
	
	echo "conected";
  return $link;
 }
 
 
 function close_database_connection(){
	 mysqli_close($link);
 }
 
 
 
?>
