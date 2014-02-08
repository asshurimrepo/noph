<?php 
	$ref_page = 'login';
	include 'inc/connection.php'; 
	
?>
<html>
<head>
	<title>NOPH</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

	<div class="navbar-fixed-top navbar-inverse navbar ">
		<div class="navbar-inner">
			<div class="container">
			<a href="#" class="brand">NOPH Administrator Login!</a>
			</div>
		</div>
	</div>


	<div class="well center-page h10" style="width:445px; margin-top:80px">

	<div class="alert alert-info center"> <b>Enter your Credentials</b> </div>

	<?php alerts(); ?>

	 <form method="POST" action="request.php?ref=check_crendentials">

	 	<input class="span6" type="text" name="user" placeholder="Username" /></br />
	 	<input class="span6" type="password" name="pass" placeholder="Password" /></br />
	 	<button type="submit" class="btn btn-primary">Login</button>
	 	<a href="../" class="btn btn-danger">Cancel</a>

	 </form>
	 </div>


</body>
</html>