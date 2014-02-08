<?php
include('includes/config.php');
	//user input
	$d_id=mysql_real_escape_string(trim($_POST['doctor_id']));	
	$fname=mysql_real_escape_string(trim($_POST['fname']));
	$mname=mysql_real_escape_string(trim($_POST['mid_init']));
	$lname=mysql_real_escape_string(trim($_POST['lname']));
	$dept=mysql_real_escape_string(trim($_POST['dept']));
	$gender=mysql_real_escape_string(trim($_POST['gender']));	
	$tel=mysql_real_escape_string(trim($_POST['tel']));
	$room=mysql_real_escape_string(trim($_POST['room']));
	//post..

		//check if the patient data exist already
		$query=mysql_query("select * from doctors where doctor_id='$d_id'");
		;
		if($numrows=mysql_num_rows($query)==1)
		{
			header("Location:doc.php?error=0");
		}
		else
		{
		$query=mysql_query("insert into doctors values(NULL,'$d_id','$fname','$mname','$lname','$dept','$gender','$tel','$room')");
		if($query)
		{
			header("Location:doc.php?error=1");
		}
		else
		{
			header("Location:doc.php?error=2");
		}
		}

	
?>