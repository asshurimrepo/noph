<?php
session_start();
include("includes/config.php");
include("includes/header.php");
?>
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id='container'>

        <div id="form3">
<?php
$id=$_GET['id'];
$_SESSION['doc_id']=$_GET['id'];
//query and display the patient data

	$query=mysql_query("select * from doctors where doctor_id='$id'");
	if($query)
	{
		while($data=mysql_fetch_assoc($query))
		{
			echo "Doctor:&nbsp;". $data['lname'].",&nbsp;".$data['fname']."&nbsp;".$data['mid_init']."<br>";	
			echo "Department:&nbsp;".$data['dept']."<br>";
			echo "Room:&nbsp;".$data['room']."<br>";	
		}
	}
?>
<hr style="border:1px solid lightgrey;">

		<?php
		$doc=$_GET['id'];
		$_SESSION['doc_id']=$_GET['id'];
		//display patients of that particular doctor
			$query=mysql_query("select * from patients_info where doctor_id='$doc' ");
			if($query)
			{
				echo "<table width='100%'><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Doctor ID</th><th>Address</th><th>Category</th><th>Department | Ward</th><th width='10%'>Preference</th><th>Action</th><tr/>";						
				while($row=mysql_fetch_assoc($query))
				{
								$id=$row['patient_id'];
								$_SESSION['patient_id']=$row['patient_id'];
								echo "<td>".$row['fname']."&nbsp;".$row['mid_init']."&nbsp;".$row['lname']."</td><td>".$row['bdate']."</td><td >".$row['gender']."</td>
								<td >".$row['contact']."</td><td >".$row['doctor_id']."</td><td >".$row['address']."</td>
								<td >".$row['category']."</td><td >".$row['department/ward']."</td><td>".$row['c_preference']."</td><td><a href='diagnostic.php?exam=$id'><span class='glyphicon glyphicon-user'>Patient's Profile</span></a></td></tr>";
								
				
				}
				echo "</table>";
			}
			else
			{
				echo "No patients for this doctor";																															
			}

		?>
</div>
</div>

<?php include("includes/footer.php")?>;