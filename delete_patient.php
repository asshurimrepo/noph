<?php
include('includes/config.php');
$id=$_GET['exam'];
$query=mysql_query("delete from patients_info where patient_id='$id'");
header("Location:nurse_infor.php?error=4");
?>