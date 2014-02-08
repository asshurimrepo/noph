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
$id=$_GET['id'];
$_SESSION['patient_id']=$_GET['id'];
$query=mysql_query("select * from prescription where patient_id='$id'");
if($query)
{
	$data=mysql_fetch_assoc($query);

	$history=$data['case_history'];
    $med=$data['medication'];
    $descrip=$data['discription'];
    $report=$data['report_type'];
    $doc=$data['document_type'];
    $lab=$data['lab_discription'];

}
else
{
echo "Error Here";
}
?>
<div id="" title="Create new vital signs">
<?php 
if(isset($_GET['update']))
	{
		if($_GET['update']=='1')
		{
			echo "<div style='padding:5px' class='alert aler-success'>The record is updated</div>";
		}
		if($_GET['update']=='0')
		{
			echo "<div style='padding:5px' class='alert aler-info'>Cannot Update the Record</div>";
		}
		if($_GET['update']=='3')
		{
			echo "<div style='padding:5px' class='alert aler-warning'>That Record exist!</div>";
		}			
	}
?>

<form action="do_edit.php" method="post">
<fieldset class="myForm" style="margin:0 auto;">
<div style="background-color:grey;color:white;text-align:center">ADD THE VITAL SIGNS</div>

  <div class="form-group">
     <label for="case_history">Case History: </label>
     <textarea name="history" required=""  style="width:500px" value="<?php echo $history;?>" rows="5" class="form-control"><?php echo $history;?></textarea>
  </div>

  <div class="form-group">
     <label for="medication">Medication: </label>
     <input type="text" required="" value="<?php echo $med;?>" class="form-control"  style="width:500px" rows="2" name="medication"/>
  </div>

  <div class="form-group">
     <label for="description">Description: </label>
     <textarea name="description" required="" value="<?php echo $descrip;?>" style="width:500px" rows="5" class="form-control"><?php echo $descrip;?></textarea> 
  </div>
  
  <div class="form-group">
     <label for="report_type">Report Type: </label>
     <input class="form-control" required="" value="<?php echo $report;?>" style="width:500px" required="" type="text" name="report" id="report"required> 
  </div>
  
   <div class="form-group">
     <label for="document_type">Document Type: </label>
     <input class="form-control"required="" value="<?php echo $doc;?>" style="width:500px" required="" type="text" name="document" id="document_type"required> 
  </div>
  
   <div class="form-group">
    <form action="upload_file.php" method="post"
    enctype="multipart/form-data">
    <label for="file">Your image:</label>
    <input type="file" required="" name="file_name" id="pic"><br>
    </form>
  </div>
  
   <div class="form-group">
     <label for="lab_discription">Lab Description: </label>
    <textarea name="lab" required="" value="<?php echo $lab;?>" style="width:500px" rows="4" class="form-control"><?php echo $lab;?></textarea>
  </div>
  
  <div><button  class="btn btn-danger" name="submit" type="submit">SUBMIT</button>
  </div>
</fieldset>

</form>
</div>

<?php include("includes/footer.php");?>
