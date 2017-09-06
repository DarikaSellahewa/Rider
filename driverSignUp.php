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
<body background="images/dr1.jpg">
<p >Welcome !!!!!!! <br>
Congratulations <br> you are a part of our team </p>

<div class="container" id="button">        
  <a href="loginform.php"><button type="button" class="btn btn-info" align="left">Are you already a driver ?<br> Click here to login  </button> </a>   
</div>

<div class="container" id="signup">
            <form  action="driverController.php" method="post">
                <div class="form-group">
                    <input type='text' class="form-control"  name='firstName' placeholder="First name">
                </div>
                <div class="form-group">
                    <input type='text' name='secondName' class="form-control"  placeholder="Second name">
                </div>
                <div class="form-group">
                    <input type='text' name='dob' class="form-control"  placeholder="Date of birth yyyy:mm:dd ">
                </div>
                <div class="form-group">
                    <input type='text' name='licenseNo' class="form-control"  placeholder="License number">
                </div>    
				<div class="form-group">
                    <input type='text' name='aptNo' class="form-control"  placeholder="Apartment number">
                </div> 
				<div class="form-group">
                    <input type='text' name='streetName' class="form-control"  placeholder="Street name">
                </div> 
				<div class="form-group">
                    <input type='text' name='homeTown' class="form-control"  placeholder="Home town">
                </div> 
				<div class="form-group">
                    <input type='number' name='minFee' class="form-control"  placeholder="Minimum fee">
                </div> 
				<div class="form-group">
                    <input type='text' name='userName' class="form-control"  placeholder="User name">
                </div> 
				<div class="form-group">
                    <input type='password' name='password' class="form-control"  placeholder="Password">
                </div>
				<div class="form-group">
                    <input type='password' name='re_password' class="form-control"  placeholder="Re-enter password">
                </div> 				
                <input type="submit" name="submit" value="Sign Up">
            </form>
        </div>
</body>
</html>