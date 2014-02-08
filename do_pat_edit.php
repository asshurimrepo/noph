<?php
session_start();
include('includes/config.php');

    $id= $_POST['patient_id'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $lname=$_POST['lname'];
    $bdate=$_POST['bdate'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $status=$_POST['status'];
    $occupation=$_POST['occupation'];
    $religion=$_POST['religion'];
    $nationality=$_POST['nationality'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $doctor_id=$_POST['doctor_id'];
    $dep_ward=$_POST['dep_ward'];
    $insurance=$_POST['insurance'];
    $ornum=$_POST['ornum'];
   
  
//now you can check if the record exists
$update=mysql_query("
update patients_info set patient_id='$id', fname='$fname',mname='$mname',lname='$lname',bdate='$bdate',
age='$age',gender='$gender',address='$address',status='$status',occupation='$occupation',religion='$religion',nationality='$nationality',contact='$contact',email='$email',doctor_id='$doctor_id',dep_ward='$dep_ward',c_preference='$insurance',ornum='$ornum',date_in='now()' where patient_id='$id'");
			if($update)
			{
				header("Location:nurse_infor.php?update=1");
			}
			else
			{
				header("Location:nurse_infor.php?update=0");	
			}



?>