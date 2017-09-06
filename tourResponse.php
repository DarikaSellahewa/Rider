<html>
<head>
<title>Sign Up Page</title>
<link rel='stylesheet' href='style.css' type='text/css' >
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
	<!--button-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body background="images/taxi1.jpg">
	<div id="main">
	<table  border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;">
	<thead>
		<th>Driver name</th>
		<th>Min Fee</th>
		<th>Send a request </th>
	</thead>
	<tbody>
	<?php
	$num=count($firstnames);
	for ($i=0;$i<$num;$i++){ ?>
	<tr>
	<td><?php echo htmlspecialchars($firstnames[$i], ENT_QUOTES, 'UTF-8'); ?></td>
	<td><?php echo htmlspecialchars($minfee[$i], ENT_QUOTES, 'UTF-8'); ?></td>
	<td>
		        
		<a href=""><button type="button" class="btn btn-info" align="left">SEND</button> </a>   
		
	</td>
	</tr>
	<?php }?>
	</tbody>
</table>
</div>	
</div>

</body>
</html>
	</body>
	</html>