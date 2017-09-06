<html>
<head>
<title>Log In</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<link href="site.css" rel="stylesheet">
<body background="images/1.jpg">
<div id="login">
<h1>TAXI SERVICE</h1>
<h2>LOG IN</h2>

<table>
<tr>
<form action="loginAsDriver.php" method="post">
<td><input id="username" name='username' class="form-control" placeholder="Enter Username" type='text'></td>
</tr>
<tr>
<td><input id="password" name="password" class="form-control" placeholder="Enter Password" type="password"></td>
</tr>
</table>
<div class="checkbox" >
<label><input type="checkbox" >Remember me</label>
</div>
<input id="Sign_In" name="submit" type="submit" class="btn btn-primary btn-md" value="SIGN IN">
<div id="linkOfSignUp">
<p>Don't have an account?<a style="color:#00CCFF;" href="second.php">SIGN UP</a></p>
</div>
</form>
</div>
</body>
</html>