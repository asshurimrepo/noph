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
