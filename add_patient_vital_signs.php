<?php
include('includes/header.php');
?>

<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">
	
 <!-- bootstrap here -->
<div id="form3">
		<?php
		if(isset($_GET['error']))
		{
			if($_GET['error']=='0')
			{
				echo"<div style='text-align:center;width:150px;;background-color:lightblue'>The record Exist</div>";
			}
			if($_GET['error']=='1')
			{
				echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:lightgreen'>The record is saved</div>";
			}
			if($_GET['error']=='2')
			{
				echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:orange'>Cannot save the record</div>";
			}
		}
		?>
		<form action="patient_vital.php" method="post">
		<div id="record"><strong>Vital Signs</strong></div>
		
		<?php
		include("includes/config.php");
		$key=$_GET['exam'];
		$_SESSION['id']=$_GET['exam'];
		$query=mysql_query("select * from  patients_info where patient_id='$key'");
		$data=mysql_fetch_assoc($query);
		$id=$data['patient_id'];
		$fname=$data['fname'];
		$mname=$data['mname'];
		$lname=$data['lname'];
		?>
		<div class="Form" style="border:1px ridge lightgrey">
			<center><table>
			 <td for="patient_id">Patient ID: </td><td><input class="form-control" readonly type="text"value="<?php echo $id;?>" name="pat_id"/></td>
			 <td for="fname">First Name: </td>
			 <td><input class="form-control" type="text" name="fname" readonly id="fname" value="<?php echo $fname;?>" required></td>
			<td for="mid_init">Middle Initial: </td>
			<td><input class="form-control" type="text" name="mid_init" readonly value="<?php echo $mname;?>" id="mid_init"></td>
			 <td for="lname">Last Name: </td>
			 <td><input class="form-control" type="text" name="lname" readonly id="lname" value="<?php echo $lname;?>" required></td><tr/>
			 <td for="fname">Temp: </td>
			 <td><input class="form-control" type="text" name="temp" id="temp" required></td>
			
			 <td for="pulserate">Pulse Rate: </td>
			 <td><input class="form-control" type="text" name="pulse" id="pulserate" required></td>
             
             <td for="respiratory_rate">Respiratory Rate: </td>
			 <td><input class="form-control" type="text" name="respiratory" id="respiratory_rate" required></td>
             
             <td for="blood_pressure">Blood Pressure: </td>
			 <td><input class="form-control" type="text" name="pressure" id="blood_pressure" required></td></tr>
             
             <td for="weight">Weight: </td>
			 <td><input class="form-control" type="text" name="weight" id="weight" required></td>
             
             <td for="height">Heights: </td>
			 <td><input class="form-control" type="text" name="height" id="height" required></td>
             
             <td for="abdominal">Abdminal Girth: </td>
			 <td>
			 <input class="form-control" type="text" name="abdominal" id="abdominal" required></td>

			  <td for="category">Category: </td>
			 <td><select name="category" class="bmonth">
				<option value="Outpatient">Outpatient</option>
				<option value="Inpatient">Inpatient</option>
			 </select></td></tr>

			 <td for="room">Room: </td>
			 <td><input class="form-control" type="text" name="room" id="room" required></td>

			 <td for="doctor_id">Doctor_ID: </td>
			 <td><input class="form-control" type="text" name="doctor_id" id="doctor_id" required></td>

			 <input  type="hidden" name="nurse" id="nurse" value="890" required>
			 </td></tr>
		  
		  
		  <td>
		  	<input type="submit" class="btn btn-primary" value="SAVE RECORD" name="submit">
		  	<input type="submit" class="btn btn-danger" value="CANCEL" name="reset"></td>
			</table>
		</div>

		</form>


 <hr style="border:1px solid lightgrey">
    <?php
    include('includes/config.php');
    //display patients of that particular doctor
      $query=mysql_query("select * from vital_signs_measurements order by fname ");
      if($query)
      {
        echo "<table id='table' class='table table-hover' width='100%'><thead><th>Name</th><th>Temperature</th><th>Palse rate</th><th>Respiratory rate</th><th>Blood pressure</th><th>Weight</th><th>Height</th><th>Abdominal girth</th><th>Category</th><th>Room</th><th>Doctor ID</th><th>Nurse ID</th><th>Action</th></thead>";            
        while($row=mysql_fetch_assoc($query))
        {
                $id=$row['patient_id'];
                $_SESSION['patient_id']=$row['patient_id'];
                echo "<tr><td>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</td><td>".$row['temp']."</td><td >".$row['pulserate']."</td>
                <td >".$row['respiratory_rate']."</td><td >".$row['blood_pressure']."</td><td >".$row['weight']."</td><td >".$row['height']."</td><td >".$row['abdominal_girth']."</td><td >".$row['category']."</td><td >".$row['room']."</td><td >".$row['doctor_id']."</td><td >".$row['nurse_id']."</td><td>
                <a href='#?exam=$id'><span class='glyphicon glyphicon-edit'>Edit</span></a>|
              <a href='delete_patient.php?exam=$id'><span class='glyphicon glyphicon-edit'>Delete</span></a>
                </td></tr>";
                
        
        }
        echo "</table>";
      }
      else
      {
        echo "No patients for this doctor";                                                             
      }

    ?>
</div>
<script type="text/javascript">
  
    var $rows = $('#table tbody tr');
    $('#search').keyup(function () {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function () {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });

</script>

</div>
</div>
		
</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>






