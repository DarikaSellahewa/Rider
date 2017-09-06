<?php
include('sessionRider.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link rel='stylesheet' href='style.css' type='text/css' >
<!--button-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<link href="site.css" rel="stylesheet" type="text/css">
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body background="images/car1.jpg">
<div id="profile">
<h1 >Welcome :</h1> 
<p>You are logged in as :<i><?php echo $login_session; ?></i></p>
<div class="container" id="button">        
  <a href="passengerLogOut.php"><button type="button" class="btn btn-info" align="left"><b> Logout</b>  </button> </a>   
</div>
<h2>Click <a href="user_account.php"> here </a> for more options </h2> 
</body>
</html>