<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  

<title>Availability</title>


<style>
h1 {
    color:SlateGrey;
    text-align: center;
	font-size:100;
} 

h2{
	text-align:center;
	font-size:20px;
}
h3{
	color: black;
	text-align:center;
	font-size:90;
	padding:10px;
	
}

#button{
	  
	  colour:black;
	  width:600px;
 
      position: absolute;
      z-index:1;
      visibility: show;
	  size:medium;
}
#status{
	border-radius:10px;
	border:2px solid #ccc;
	padding:5px;
	background:rgba(255,255,255,0.7);
	width:160px;
	margin-top:10px;
	color:DarkMagenta;
}
#layout{
	border-radius:10px;
	border:2px solid #ccc;
	padding:1px;
	background:rgba(255,255,255,0.7);
	width:1368px;
	font-family:Arial;
}


</style


</head>

<body background="images/mobile.jpg" style="background-size:cover;background-repeat:no-repeat;">


<div id="layout">
	<h1>Welcome</h1>
	
		<div class="container" id="button">        
	<a href="passengerLogOut.php"><button type="button" class="btn btn-info" align="left"><b> Logout</b>  </button> </a>   
	</div>
	
	<div class="container" >      
		<button type="button" class="btn btn-primary" style="top:100px;left:1500px;">View History</button>
		<a href="passengerRequestForm.php"><button type="button" class="btn btn-primary" style="top:100px;left:1500px;">Make a request</button></a>
    </div>
	
	
</div>


 <div id="status">

	<h2>Your request is <br> Pending</h2>
	
</div><br></br>

<div id="layout">
	<h2>Available drivers</h2>
	
	<?php
		include "passengerReqModel.php";
		display_driver_fee();
	?>  
</div>	
</div>

</body>
</html>