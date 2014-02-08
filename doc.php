<?php
include('includes/header.php');
?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">



<?php
if(isset($_GET['error']))
{
	if($_GET['error']=='0')
	{
		echo"<div style='text-align:center;width:150px;margin-left:570px;background-color:lightblue'>The record Exist</div>";
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


<div id="form3">
<form action="add_doctor.php" method="post">
<fieldset class="myForm" style="margin:0 auto;">
<legend class="text-Regular_Grey">
	<strong>New Doctor Form</strong>
</legend>

<div class="form-group">
     <label for="doctor_id">Doctor ID: </label>
     <input  type="text" class="form-control" name="doctor_id" id="doctor_id"> 
  </div>

  <div class="form-group">
     <label for="fname">First Name: </label>
     <input class="form-control" type="text" name="fname" id="fname" required> 
  </div>

  <div class="form-group">
     <label for="mid_init">Middle Initial: </label>
     <input class="form-control" type="text" name="mid_init" id="mid_init"> 
  </div>

  <div class="form-group">
     <label for="lname">Last Name: </label>
     <input class="form-control" type="text" name="lname" id="lname" required> 
  </div>
  
  <div class="form-group">
   <label for="dept">Department & Ward: </label>
			 <select name="dept" class="bmonth">
				<option value="dept0">- Select Department/Ward -</option>
				<option value="pediatrics department Station 1">Pediatrics Department Station1</option>
				<option value="pediatrics department Station 2">Pediatrics Department Station2</option>
				<option value="surgery main department">Surgery Main Department</option>
				<option value="surgery dorm department">Surgery Dorm Department</option>
				<option value="lr-dr (labor and lelivery room)">LR-DR (Labor and Delivery Room)</option>
				<option value="pospartum department">Pospartum Department</option>
				<option value="lower annex medicine department">Lower Annex Medicine Department</option>
				<option value="upper annex medicine department">Upper Annex Medicine Department</option>
				<option value="operating room">Operating Room</option>
				<option value="out-patient department (OPD)">Out-Patient Department (OPD)</option>
				<option value="prenatal department">Prenatal Department</option>
				<option value="mezzanine department (private rooms)">Mezzanine Department (Private Rooms)</option>
				<option value="under five clinic">Under Five Clinic</option>
			 </select>
  </div>

  <div class="form-group">
     <label for="gender">Gender: </label>
     <select name="gender" class="bmonth">
     <option value="0">-Select Gender-</option>
     	<option value="male">Male</option>
     	<option value="female">Female</option>
     </select>
  </div>

  <div class="form-group">
     <label for="tel">Tel Number: </label>
     <input class="form-control" type="text" name="tel" id="tel"required> 
  </div>
  
  <div class="form-group">
     <label for="room">Room: </label>
     <input class="form-control" type="text" name="room" id="room"required> 
  </div>

  <button  class="btn-block" name="submit" type="submit">Add</button>

</fieldset>

</form>
</div>
</div>
</div>

</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
