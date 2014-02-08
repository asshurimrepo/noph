<?php
session_start();
include('includes/config.php');
$history=$_POST['history'];
$med=$_POST['medication'];
$descrip=$_POST['description'];
$report=$_POST['report'];
$doc=$_POST['document'];
$file=$_POST['file_name'];
$lab=$_POST['lab'];
$id= $_SESSION['patient_id'];
//now you can check if the record exists
	$query=mysql_query("select * from prescription where patient_id='$id' and case_history='$history' ");
	if($query)
	{
		$rows=mysql_fetch_assoc($query);
		if($rows['case_history']==$history)
			{
				header("Location:edit_diagnostic.php?id=$id&update=3");	
			}
		else{
			$update=mysql_query("update prescription set case_history='$history',medication='$med',discription='$descrip',
					report_type='$report',document_type='$doc',file_name='$file',lab_discription='$lab'");
			if($update)
			{
				header("Location:diagnostic.php?exam=$id&update=1");
			}
			else
			{
				header("Location:edit_diagnostic.php?id=$id&update=0");	
			}
			}	
	}
	else
	{
		echo "Cannot Query the system";
	}

?>