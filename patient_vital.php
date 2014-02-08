<?php 
session_start();
include("includes/config.php");
			//user input
	$p_id=mysql_real_escape_string(trim($_POST['pat_id']));
	$fname=mysql_real_escape_string(trim($_POST['fname']));
	$mname=mysql_real_escape_string(trim($_POST['mid_init']));
	$lname=mysql_real_escape_string(trim($_POST['lname']));
	$temp=mysql_real_escape_string(trim($_POST['temp']));
	$pulse=mysql_real_escape_string(trim($_POST['pulse']));
	$res=mysql_real_escape_string(trim($_POST['respiratory']));
	$blood=mysql_real_escape_string(trim($_POST['pressure']));
	$weight=mysql_real_escape_string(trim($_POST['weight']));
	$height=mysql_real_escape_string(trim($_POST['height']));
	$abdominal=mysql_real_escape_string(trim($_POST['abdominal']));
	$category=mysql_real_escape_string(trim($_POST['category']));
	$room=mysql_real_escape_string(trim($_POST['room']));
	$doctor_id=mysql_real_escape_string(trim($_POST['doctor_id']));
	$nurse=mysql_real_escape_string(trim($_POST['nurse']));
	//post..
	$id=$_SESSION['patient_id'];
		//check if the patient data exist already
		$query=mysql_query("select * from vital_signs_measurements where patient_id='$p_id'");
		$numrows=mysql_num_rows($query);
		if($numrows>0)
		{
			header("Location:add_patient_vital_signs.php?error=0&exam=$id");
		}
		else
		{
		$query=mysql_query("insert into vital_signs_measurements values(null,'$p_id','$fname','$mname','$lname','$temp',
							'$pulse','$res','$blood','$weight','$height','$abdominal','$category','$room','$doctor_id','{$_SESSION['username']}')");
		if($query)
		{
			header("Location:add_patient_vital_signs.php?error=1&exam=$id");
		}
		else
		{
			header("Location:add_patient_vital_signs.php?error=2&exam=$id");
		}
		}
		?>