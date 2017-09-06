<?php
include "dbConnection.php";
session_start(); // Starting Session
$connection=open_database_connection();
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Fill all the fields";
include "driverError.html.php";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection,$username);
$password = mysqli_real_escape_string($connection,$password);
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from driver_login where password='$password' AND username='$username'");
$rows = mysqli_num_rows($query);

if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: welcome.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
include "driverError.html.php";
}
mysqli_close($connection); // Closing Connection
}
}
?>