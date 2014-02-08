<?php
session_start();
include('includes/config.php');
$history=$_POST['history'];
$med=$_POST['medication'];
$descrip=$_POST['description'];
$report=$_POST['report'];
$doc=$_POST['document'];
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
					$file = '';
					if(!empty($_FILES['file_name']['error']))
					{
						switch($_FILES['file_name']['error'])
						{

							case '1':
								$msg = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
								break;
							case '2':
								$msg = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
								break;
							case '3':
								$msg = 'The uploaded file was only partially uploaded';
								break;
							case '4':
								$msg = 'No file was uploaded.';
								break;
							case '6':
								$msg = 'Missing a temporary folder';
								break;
							case '7':
								$msg = 'Failed to write file to disk';
								break;
							case '8':
								$msg = 'File upload stopped by extension';
								break;
							case '999':
							default:
								$msg = 'No error code avaiable';
						}
					}elseif(empty($_FILES['file_name']['tmp_name']) || $_FILES['file_name']['tmp_name'] == 'none')
					{
						$msg = 'No file was uploaded..';
					}else 
					{	
						$file = 'attached_'.rand(1,99999).'.jpg';
						@move_uploaded_file($_FILES['file_name']['tmp_name'], 'uploads/'.$file);

					}


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