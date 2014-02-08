   <?php
include("includes/config.php");
$key=$_POST['search'];
$submit=$_POST['submit'];
if($submit)
{
$results = mysql_query( "SELECT * FROM patients_info where lname='$key' or patient_id='$key'");
$rows=mysql_num_rows($results);

	if($results)
	{
		if($rows==1)
		{
		echo " <div id='form2'>";
			echo "<table width='100%' th{text-align:center><th style='text-align:center'>Patient_ID</th><th>Patient Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Doctor ID</th><tr/>";
				while($row = mysql_fetch_assoc($results))
				{
					$id=$row['patient_id'];
					header("Location:home.php?done=1&id=$id");
				}
			echo "</table>";
		echo "</div>";
			} 
			else
			{
				header("Location:home.php?done=0&id=$id");
			}
		}
	else
	{
		header("Location:home.php?done=2&id=$id");
	}
}
else
{
	header("Location:home.php?done=3&id=$id");
}

?>
