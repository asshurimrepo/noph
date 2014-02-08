<?php
include('includes/config.php');
	//user input
	$p_id=mysql_real_escape_string(trim($_POST['patient_id']));
	$fname=mysql_real_escape_string(trim($_POST['fname']));
	$mname=mysql_real_escape_string(trim($_POST['mname']));
	$lname=mysql_real_escape_string(trim($_POST['lname']));
	$dob=mysql_real_escape_string(trim($_POST['bdate']));
	$age=mysql_real_escape_string(trim($_POST['age']));
	$gender=mysql_real_escape_string(trim($_POST['gender']));
	$address=mysql_real_escape_string(trim($_POST['address']));
	$status=mysql_real_escape_string(trim($_POST['status']));
	$occupation=mysql_real_escape_string(trim($_POST['occupation']));
	$religion=mysql_real_escape_string(trim($_POST['religion']));
	$nationality=mysql_real_escape_string(trim($_POST['nationality']));
	$cont=mysql_real_escape_string(trim($_POST['contact']));	
	$email=mysql_real_escape_string(trim($_POST['email']));
	$doc_id=mysql_real_escape_string(trim($_POST['doctor_id']));
	$dept=mysql_real_escape_string(trim($_POST['dep_ward']));
	$insurance=mysql_real_escape_string(trim($_POST['insurance']));
	$ornum=mysql_real_escape_string(trim($_POST['ornum']));

		//check if the patient data exist already

		$query=mysql_query("select * from patients_info where email='$email' &&  patient_id='$p_id'");
		if($query)
		{
					$numrows=mysql_num_rows($query);
					if($numrows>0)
					{
						header("Location:nurse_infor.php?error=1");
					}
					else
					{
						$query=mysql_query("insert into patients_info values(NULL,'$p_id','$fname','$mname','$lname','$dob','$age','$gender','$address','$status','$occupation','$religion','$nationality','$cont','$email','$doc_id','$dept','$insurance','$ornum',now())");
						if($query)
						{
							header("Location:nurse_infor.php?error=0");
						}
						else
						{
							header("Location:nurse_infor.php?error=2");
						}

					}
	}
	else{header("Location:nurse_infor.php?error=3");}

	
?>