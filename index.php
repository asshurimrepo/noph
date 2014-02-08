<?php include("includes/header.php");?>

<div id="container">

	<div id="login">
	<div style="margin-left:350px;width:500px;padding-top:100px" >
	
	<div style="background-color:#f5f5f5">
	
	<div class="alert alert-info" style="text-align:center;font-size:17px;color:#30000;padding:6px">Enter Your Credentials </div>
			<center><?php
				if(isset($_GET['error']))
				{
					if($_GET['error']=='1')
					{
						echo "<div class='alert alert-danger'>Your Username and Password are wrong</div>";
					}
					if($_GET['error']=='2')
					{
						echo "<div class='alert alert-danger'>Error in the system</div>";
					}
					if($_GET['error']=='3')
					{
						echo "<div class='alert alert-danger'>You need to Login First</div>";
					}
					if($_GET['error']=='4')
					{
						echo "<div class='alert alert-danger'> Logged Out Successfully </div>";
					}					
				}

			?>
			</center>
			<form action="login.php" method="post" >
				<div><input type="text" required="" placeholder="Enter Username" name="username" class="form-control"></div>
				<br>
				<div><input type="password" required="" placeholder="Enter Password" name="password" class="form-control"></div>
				<br>
				<div><input type="submit" name="submit" class="btn btn-success ">
				<input type="reset" name="submit" class="btn btn-danger"><span style="text-align:right"><a href="register.php">Register Here</a></span></div>

			</form>
		</div>
		</div>
	</div>
</div>
<?php include("includes/footer.php");?>

