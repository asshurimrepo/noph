<?php
session_start();
  if(!(isset($_SESSION['username'])) && !(isset($_SESSION['status'])))
  {
    header('Location:index.php');
  }
?>
<?php 
include('includes/header.php');
include('includes/config.php');
?>

<?PHP
$id=$_GET['exam'];
$_SESSION['patient_id']=$_GET['exam'];
$query=mysql_query("select * from patients_info where patient_id='$id'");
if($query)
{
	$data=mysql_fetch_assoc($query);

	  $patient_id=$data['patient_id'];
    $fname=$data['fname'];
    $mname=$data['mname'];
    $lname=$data['lname'];
    $bdate=$data['bdate'];
    $age=$data['age'];
    $gender=$data['gender'];
    $address=$data['address'];
    $status=$data['status'];
    $occupation=$data['occupation'];
    $religion=$data['religion'];
    $nationality=$data['nationality'];
    $contact=$data['contact'];
    $email=$data['email'];
    $doctor_id=$data['doctor_id'];
    $dep_ward=$data['dep_ward'];
    $insurance=$data['c_preference'];
    $ornum=$data['ornum'];
    
}
else
{
echo "Error Here";
}
?>
<div id="" title="Create new vital signs">

<form action="do_pat_edit.php" method="post">
<div style="background-color:grey;color:white;text-align:center">EDIT PATIENTS INFORMATION</div>
      <div class="form-group">
       <table width="80%" class="table table-hover">
    <td>Patient ID:</td>     
<td>
<input type="text" class="form-control" name="patient_id" value="<?php echo $patient_id;?>" id="patient_id" </td>      
         <td>First Name:</td>  

        <td width="13%"><input required="" type="text" value="<?php echo $fname;?>" class="form-control" name="fname"></td>
        <td>Middle Name:</td>

        <td><input type="text" required="" value="<?php echo $mname;?>" class="form-control" name="mname"></td>
         <td>Last Name:</td>

        <td><input type="text" required="" value="<?php echo $lname;?>" class="form-control" name="lname"></td><tr/>
        <td>Birth Date:</td>

        <td><input type="date" required="" value="<?php echo $bdate;?>" class="form-control" name="bdate"></td>
         <td>Age:</td>

        <td><input type="text" required="" value="<?php echo $age;?>" class="form-control" name="age"></td>
        <td>Gender:</td>

        <td><input type="text" required="" value="<?php echo $gender;?>" class="form-control" name="gender"></td>
         <td>Address:</td>

        <td><input type="text" required="" value="<?php echo $address;?>" class="form-control" name="address"></td><tr/>
        <td>Status:</td>

        <td><input type="text" required="" value="<?php echo $status;?>" class="form-control" name="status"></td>
         <td>Occupation:</td>

        <td><input type="text" required="" value="<?php echo $occupation;?>" class="form-control" name="occupation"></td>
        <td>Religion:</td>

        <td><input type="text" required="" value="<?php echo $religion;?>" class="form-control" name="religion"></td>
         <td>Nationality:</td>

        <td><input type="text" required="" value="<?php echo $nationality;?>" class="form-control" name="nationality"></td><tr/>
        <td>Contact:</td>

        <td><input type="text"required="" value="<?php echo $contact;?>" class="form-control" name="contact"></td>
         <td>Email:</td>

        <td><input type="text" required="" value="<?php echo $email;?>" class="form-control" name="email"></td>
        <td>Doctor ID:</td>

        <td><input type="text" required="" value="<?php echo $doctor_id;?>" class="form-control" name="doctor_id"></td>
         <td>Dep/Ward:</td>

        <td><input type="text"required="" value="<?php echo $dep_ward;?>" class="form-control" name="dep_ward"></td><tr/>
        <td>Insurance:</td>

        <td><input type="text" required="" value="<?php echo $insurance;?>" class="form-control" name="insurance"></td>
        <td>OR_Number:</td>

        <td><input type="text" required="" value="<?php echo $ornum;?>" class="form-control" name="ornum"></td>
        <tr/>
         
       </table>
       <div>
    </form>

  </div>
  
  <div><button  class="btn btn-danger" name="submit" type="submit">UPDATE</button>
  </div>
</fieldset>

</form>
</div>

<?php include("includes/footer.php");?>
