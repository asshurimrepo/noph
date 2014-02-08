<?php
session_start();
include("includes/config.php");
if($_POST['submit'])
{
	$fname=mysql_real_escape_string($_POST['fname']);
	$mname=mysql_real_escape_string($_POST['mname']);
	$lname=mysql_real_escape_string($_POST['lname']);
	$username=mysql_real_escape_string($_POST['username']);
	$dept=mysql_real_escape_string($_POST['dept']);
	$password=mysql_real_escape_string($_POST['password']);
	$cpassword=mysql_real_escape_string($_POST['cpassword']);
	//submit the credentials
	$query=mysql_query("select * from user where username='$username' and password='$password'");
	if($query)
	{
		$data=mysql_fetch_assoc($query);
		if($num=mysql_num_rows($query)==1)
		{
			header("Location:register.php?error=4");
		}
		else
		{
			$level=0;
			$query=mysql_query("insert into user values(null,'$username','$password','$fname','$mname','$lname','$dept','$level')");
			if($query)
			{
				header("Location:register.php?error=5");
			}
		}
	}
	else
	{
		header("Location:register.php?error=6");
	}
}
?>