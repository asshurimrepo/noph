<?php
session_start();
include('includes/header.php');
include('includes/config.php');
?>
<?php
	$pat_id=$_SESSION['patient_id'];
	$id=$_SESSION['doc_id'];
	$history=mysql_real_escape_string(trim($_POST['history']));
	$med=mysql_real_escape_string(trim($_POST['medication']));
	$dec=mysql_real_escape_string(trim($_POST['description']));
	$report=mysql_real_escape_string(trim($_POST['report']));	
	$doc=mysql_real_escape_string(trim($_POST['document']));
	$lab=mysql_real_escape_string(trim($_POST['lab']));
	//post..//check if the patient data exist already
	$query=mysql_query("select * from prescription where case_history='$history'") or die("Dead Query");
	if($query)
	{
	$file="0";

			$insert=mysql_query("insert into prescription values(null,'$id','$pat_id',
			'$history','$med','$dec','$report','$doc','$file','$lab')");
			if($insert)
			{
				header("Location:diagnostic.php?error=1&exam=$pat_id");
			}
			else
			{
				header("Location:diagnostic.php?error=2&exam=$pat_id");
			}
		
	}
	else
	{
		header("Location:diagnostic.php?error=2&exam=$pat_id");
	}

	
?>       
 



<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
