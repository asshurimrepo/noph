<?php include("includes/header.php");

?>

<div id="container">
<div class="navbar navbar-default" style="text-align:center"><h1>WELCOME TO RECORD SYSTEM</h1></div>
	<div id="login">
	<div style="margin-left:350px;width:500px">
	<div style="background-color:#f5f5f5">
	<div class="alert alert-info" style="text-align:center;font-size:17px;color:#30000;padding:6px">Enter Your Credentials </div>
			<center><?php
				if(isset($_GET['error']))
				{
					if($_GET['error']=='4')
					{
						echo "<div class='alert alert-danger'>Account Exists</div>";
					}
					if($_GET['error']=='5')
					{
						echo "<div class='alert alert-danger'>Account Created!<a href='index.php'>Login</a></div>";
					}
					if($_GET['error']=='6')
					{
						echo "<div class='alert alert-danger'>Error in the System</div>";
					}					
				}

			?>
			</center>
			<form action="reg_auth.php" method="post" >
				

				<div><input type="text" required="" placeholder="First Name" name="fname" class="form-control"></div>
				<br>
				<div><input type="text" required="" placeholder="Middle Name" name="mname" class="form-control"></div>
				<br>
				<div><input type="text" required="" placeholder="Last Name" name="lname" class="form-control"></div>
				<br>
				<div><input type="text" required="" placeholder="Enter Username" name="username" class="form-control"></div>
				<br>
				<div><input type="password" required="" placeholder="Enter Password" name="password" class="form-control"></div>
				<br>
				<div><input type="password" required="" placeholder="Confirm Password" name="cpassword" class="form-control"></div>
				<br>

				<div>
				<select name="dept" class="form-control">
					<?php
					include("includes/config.php");
					$query=mysql_query("select * from department_mst");
					
					while($data=mysql_fetch_assoc($query))
					{
						$id=$data['dep_id'];
						
						echo "<option value='$id'>".$data['name']."</option>";
					}
				?>
				</select>
				</div>
				<br>
				<div><input type="submit" name="submit" class="btn btn-success ">
				<input type="reset" name="submit" class="btn btn-danger"></div>

			</form>
		</div>
		</div>
	</div>
</div>
<?php include("includes/footer.php");?>

