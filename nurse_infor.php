<?php
session_start();
	if(!isset($_SESSION['username']) || !isset($_SESSION['level']))
	{
		header("Location:index.php?error=3");
	}
?>
<?php
include('includes/header.php');
?>
<!--Start of the container here-->
<style type="text/css"> 
#panel,#flip
{
padding:5px;
text-align:center;
border:solid 1px #c3c3c3;
}
#panel
{

display:none;
}
</style>


<div class="alert alert-info" style="text-align:center;padding:5px;font-size:14px">
 
  
 
            <form action="patient_search.php" method="post">
          <table width="100%">
          <td> You are sign-in as <?php echo "<b><font color='#300000'>". $_SESSION['username']."</font></b>";?>
 <a href="logout.php"><span class="glyphicon glyphicon-remove">Logout</span></a>
          </td>
            <td align="right">
            <input type="text" style="width:250px;text-align:center;font-family:century;font-weight:bold" class="form-control" placeholder="Enter Search Item" id="search"name="search"></td>
            
          </table>
          </form>
</div>
<div id="container">         
  <div id="form3">
  <?php
  if(isset($_GET['error']))
    if($_GET['error']=='0')
    {
      echo "<div style='padding:4px;color:green'>Record Added..</div>";
    }
    elseif($_GET['error']=='1')
    {
      echo "<div style='padding:4px;color:red'>Patient Record Exist...</div>";
    } 
    elseif($_GET['error']=='2')
    {
      echo "<div style='padding:4px;color:red'>Cannot Add this record!</div>";
    }
     elseif($_GET['error']=='3')
    {
      echo "<div style='padding:4px;color:red'>Cannot Query the DB!</div>";
    }
    elseif($_GET['error']=='4')
    {
      echo "<div style='padding:4px;color:red'>Record Delete..</div>";
    }     
    else{}       
  {

  }
  ?>
  <?php 
if(isset($_GET['update']))
  {
    if($_GET['update']=='1')
    {
      echo "<div style='padding:5px;color:green..' class='alert aler-success'>The record is updated</div>";
    }
    if($_GET['update']=='0')
    {
      echo "<div style='padding:5px;color:orange' class='alert aler-info'>Cannot Update the Record..</div>";
    }
    if($_GET['update']=='3')
    {
      echo "<div style='padding:5px' class='alert aler-warning'>That Record exist!</div>";
    }     
  }
?>

   <div id='patients_add'>
    <form action="add_new_patient.php" method="post">
      <div class="form-group">
       <table width="80%" class="table table-hover">
    <td>Patient ID:</td>     
<td>
<input type="text" class="form-control" name="patient_id" id="patient_id" readonly value="<?=rand(100,9999)?>"> </td>       
        <td>Birth Date:</td>
        <td><input type="date" required="" class="form-control" name="bdate"></td>
         <td>Age:</td>
        <td><input type="text" required="" class="form-control" name="age"></td>
        <td>Insurance:</td>
        <td><input type="text" required="" class="form-control" name="insurance"></td></tr>
        <td>First Name:</td>
        <td width="13%"><input required="" type="text" class="form-control" name="fname"></td>
         <td>Address:</td>
        <td><input type="text" required="" class="form-control" name="address"></td>
        <td>Status:</td>
        <td><input type="text" required="" class="form-control" name="status"></td>
         <td>Occupation:</td>
        <td><input type="text" required="" class="form-control" name="occupation"></td><tr/>
        <td>Middle Name:</td>
        <td><input type="text" required="" class="form-control" name="mname"></td>
        <td>Religion:</td>
        <td><input type="text" required="" class="form-control" name="religion"></td>
         <td>Nationality:</td>
        <td><input type="text" required="" class="form-control" name="nationality"></td>
        <td>Contact:</td>
        <td><input type="text"required="" class="form-control" name="contact"></td><tr/>
        <td>Last Name:</td>
        <td><input type="text" required="" class="form-control" name="lname"></td>
         <td>Email:</td>
        <td><input type="text" required="" class="form-control" name="email"></td>
        <td>Doctor ID:</td>
        <td><input type="text" required="" class="form-control" name="doctor_id"></td>
         <td>Dep/Ward:</td>
        <td><input type="text"required="" class="form-control" name="dep_ward"></td><tr/>
        <td>Gender:</td>
        <td><input type="text" required="" class="form-control" name="gender"></td>
        <td>OR_Number:</td>
        <td><input type="text" required="" class="form-control" name="ornum"></td>
        <tr/>
        <td> <input type="submit" class="btn btn-primary" style="width:150px" value="ADD PATIENT" name="submit"></td>
        <td> <input type="reset" class="btn btn-danger" style="width:150px" value="CANCEL" name="reset"></td>
              
       </table>
       <div>
    </form>

  </div>
 <div> <div class="btn btn-default pull-right" id='flip'><a><font color="blue">Patients</font></a></div></div>
 <hr style="border:1px solid lightgrey">
 <div id="panel">
    <?php
    include('includes/config.php');
    //display patients of that particular doctor
      $query=mysql_query("select * from patients_info order by fname ");
      if($query)
      {
        echo "<table id='table' class='table table-hover' width='100%'><thead><th>Name</th><th>DOB</th><th>Gender</th><th>Contact</th><th>Doctor ID</th><th>Address</th><th>Department | Ward</th><th width='10%'>Preference</th><th>OR_Number</th><th style='text-align:center'>Action</th></thead>";            
        while($row=mysql_fetch_assoc($query))
        {
                $id=$row['patient_id'];
                $_SESSION['patient_id']=$row['patient_id'];
                echo "<tr><td>".$row['fname']."&nbsp;".$row['mname']."&nbsp;".$row['lname']."</td><td>".$row['bdate']."</td><td >".$row['gender']."</td>
                <td >".$row['contact']."</td><td >".$row['doctor_id']."</td><td >".$row['address']."</td>
                <td >".$row['dep_ward']."</td><td>".$row['c_preference']."</td><td>".$row['ornum']."<td>
                <a href='edit_patientinfo.php?exam=$id'><span class='glyphicon glyphicon-edit'>Edit</span></a>|
                <a href='add_patient_vital_signs.php?exam=$id'><span class='glyphicon glyphicon-plus'>Vital</span></a>|
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
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").toggle('slow');
  });
});
</script>
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

<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
