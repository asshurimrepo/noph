<?php
session_start();
include("includes/config.php");
if($_POST['submit'])
{
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	//submit the credentials
	$query=mysql_query("select * from user where username='$username' and password='$password'");
	if($query)
	{
		$data=mysql_fetch_assoc($query);
		if($num=mysql_num_rows($query)==1)
		{
			
			$_SESSION['username']=$data['username'];
			$_SESSION['level']=$data['level'];
			$_SESSION['staff_no']=$data['staff_no'];
			if($data['level']==100)
			{
				header("Location:home.php");
			}
			elseif($data['level']==20)
			{
				header("Location:doc_infor.php");
				
			}
			elseif ($data['level']==10) {
				header("Location:nurse_infor.php");
			}
			elseif ($data['level']==5) {
				header("Location:infor_desk.php");
			}
			else{}
		}
		else
		{
			header("Location:index.php?error=1");
		}
	}
	else
	{
		header("Location:index.php?error=2");
	}
}
?>