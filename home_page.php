<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
<title>My first Page</title>

<style>
h1 {
    color:SlateGrey;
    text-align: center;
	font-size:100;
} 

h2{
	text-align:left;
	font-size:30px;
}
h3{
	color: black;
	text-align:center;
	font-size:90;
	padding:10px;
	
}

#button{
	  top: 100;
      left: 1300;
	  colour:black;
	  width:400px;
	  background-color:blue;
      position: absolute;
      z-index:1;
      visibility: show;
	  size:medium;
}
#signUP{
	border-radius:10px;
	border:2px solid #ccc;
	padding:5px;
	background:rgba(255,255,255,0.7);
	width:400px;
	margin-top:10px;
	color:DarkMagenta;
}
#rider{
	border-radius:10px;
	border:2px solid #ccc;
	padding:1px;
	background:rgba(255,255,255,0.7);
	width:1368px;
	font-family:Forte;
}

</style>

</head>


<body background="images/img1.jpg" style="background-size:cover;background-repeat:no-repeat;">

<div id="button" >   
	<a href="loginform.php"><button type="button" class="btn btn-primary" style="margin-top:1px;margin-right:1500px;position:absolute;">Login</button>
	 
</div>

<div id="rider">
	<h1>Rider</h1>	
</div>

<div id="signUP"> 
	<h2>Want to become a driver?</h2>
	
	<div class="container" >      
		<a href="second.php"><button type="button" class="btn btn-primary">Become a driver</button></a>
	</div>
	
	<h2>Need a ride?</h2>
	<div class="container" >      
		<a href="passengerSignUp.php"><button type="button" class="btn btn-primary">Sign Up</button>
	</div>	
</div>

<?php

	echo "On your demand"; 
?>
</body>
</html>
	 