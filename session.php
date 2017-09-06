<?php
include "dbConnection.php";
session_start();// Starting Session
$connection=open_database_connection();
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select username from driver_login where username='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: loginDriverForm.php'); // Redirecting To Home Page
}
?>