<html>
<head>
<title>Sign Up Page</title>
<link rel='stylesheet' href='style.css' type='text/css' >
<!--form-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--button-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		
	<style>

	p{
		height:50px ;
		color :White;
		margin-left:30px;
		margin-top:50px;
		text-align:left;
		font-size:30px;
		
	}
	</style>
	</head>
	<body background="images/taxi1.jpg">
	<p >Welcome !!!!!!! <br>
	Have a nice ride with our Taxi Service </p>
	
	<div class="container" id="button">        
	<a href="driverLogOut.php"><button type="button" class="btn btn-info" align="left"><b> Logout</b>  </button> </a>   
	</div>
	<div class="container" id="request">
				<form  action="passengerRequest.php" method="post">
					<div class="form-group">
						<input type='text' class="form-control"  name='username' placeholder="User name">
					</div>
					<div class="form-group">
						<input type='text' class="form-control"  name='pickup_location' placeholder="Pickup location">
					</div>
					<div class="form-group">
						<input type='text' name='dropoff_location' class="form-control"  placeholder="Dropoff location">
					</div>
					<div class="form-group">
						<input type='text' name='split_fare' class="form-control"  placeholder="Split fare ">
					</div>
					<div class="form-group">
						<input type='text' name='max_payment' class="form-control"  placeholder="Maximum payment">
					</div>    
					<div class="form-group">
						<input type='text' name='tour_date' class="form-control"  placeholder="Tour date yyyy:mm:dd">
					</div> 
					<div class="form-group">
						<input type='text' name='tour_time' class="form-control"  placeholder="Tour time  hh:mm:ss">
					</div> 
					<div class="form-group">
						<input type='text' name='taxi_type' class="form-control"  placeholder="Taxi type">
					</div>  				
					<input type="submit" name="submit" value="Submit">
				</form>
			</div>
	</body>
	</html>