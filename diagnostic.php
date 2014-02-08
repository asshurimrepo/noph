<?php
session_start();
include('includes/header.php');
include('includes/config.php');
?>
<head>
	<meta charset="utf-8">
	<title>EXAMINATION</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<script src="//code.jquery.com/jquery-1.9.1.js"></script>
	<script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
	<link rel="stylesheet" href="/resources/demos/style.css">

	<script>
	$(function() {
		

		function updateTips( t ) {
			tips
				.text( t )
				.addClass( "ui-state-highlight" );
			setTimeout(function() {
				tips.removeClass( "ui-state-highlight", 1500 );
			}, 500 );
		}

		function checkLength( o, n, min, max ) {
			if ( o.val().length > max || o.val().length < min ) {
				o.addClass( "ui-state-error" );
				updateTips( "Length of " + n + " must be between " +
					min + " and " + max + "." );
				return false;
			} else {
				return true;
			}
		}

		function checkRegexp( o, regexp, n ) {
			if ( !( regexp.test( o.val() ) ) ) {
				o.addClass( "ui-state-error" );
				updateTips( n );
				return false;
			} else {
				return true;
			}
		}

		$( "#dialog-form" ).dialog({
			autoOpen: false,
			height: 580,
			width: 800,
			modal: true,

			close: function() {
				allFields.val( "" ).removeClass( "ui-state-error" );
			}
		});

		$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
	});
	</script>
</head>
<body>

<div id="dialog-form" title="Create new vital signs">
<form action="add_diagnostic.php" method="post" enctype="multipart/form-data">
<fieldset class="myForm" style="margin:0 auto;">
<div style="background-color:grey;color:white;text-align:center">ADD THE VITAL SIGNS</div>

  <div class="form-group">
     <label for="case_history">Case History: </label>
     <textarea name="history" required=""  style="width:500px" rows="2" class="form-control"></textarea>
  </div>

  <div class="form-group">
     <label for="medication">Medication: </label>
     <input type="text" required="" class="form-control"  style="width:500px" rows="2" name="medication"/>
  </div>

  <div class="form-group">
     <label for="description">Description: </label>
     <textarea name="description" required=""  style="width:500px" class="form-control"></textarea> 
  </div>
  
  <div class="form-group">
     <label for="report_type">Report Type: </label>
     <input class="form-control" required=""  style="width:500px" required="" type="text" name="report" id="report"required> 
  </div>
  
   <div class="form-group">
     <label for="document_type">Document Type: </label>
     <input class="form-control"required=""  style="width:500px" required="" type="text" name="document" id="document_type"required> 
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
    <textarea name="lab" required=""  style="width:500px" rows="2" class="form-control"></textarea>
  </div>
  
  <div><button  class="btn btn-danger" name="submit" type="submit">SUBMIT</button>
  </div>
</fieldset>

</form>
</div>
<div id="container">

    <div id="form3">
    <?php
  
  $_SESSION['patient_id']=$_GET['exam'];
  $pat_id=$_SESSION['patient_id'];
  $doc=$_SESSION['doc_id'];
  
    $query=mysql_query("select patients_info.fname,patients_info.dep_ward,patients_info.patient_id,patients_info.mname,patients_info.lname,
            patients_info.gender,patients_info.age,vital_signs_measurements.category,vital_signs_measurements.patient_id,vital_signs_measurements.doctor_id,
            doctors.doctor_id,doctors.doc_fname,doctors.doc_mname,doctors.doc_lname,doctors.room,doctors.dept
            from patients_info inner join vital_signs_measurements on patients_info.patient_id=vital_signs_measurements.patient_id
            inner join doctors on doctors.doctor_id=vital_signs_measurements.doctor_id where patients_info.patient_id='$pat_id' ");
  if($query)
  {
        while($data=mysql_fetch_assoc($query))
        {
          echo"<br>";
          echo "Patient:&nbsp;". $data['lname'].",&nbsp;".$data['fname']."&nbsp;".$data['mname']."<br>";  
          echo "Category:&nbsp;". $data['category']."<br>";
          echo "Gender:&nbsp;". $data['gender']."<br>";
          echo "Age:&nbsp;". $data['age']."<br>";
          echo "Doctor:&nbsp;". $data['doc_fname'].",&nbsp;". $data['doc_mname']."&nbsp;".$data['doc_lname']."<br>";
          echo "Department:&nbsp;".$data['dept']."<br>";
          echo "Room:&nbsp;". $data['room']."<br>";
          echo"<br>";
        }
        $id=$_SESSION['patient_id'];
      }
      else
      {
      echo "Cannot query the database";
      }
    ?>
 <div style="padding:2px;color:white" class="alert alert-info">
<button class="btn btn-primary" id="create-user" data-toggle="modal" data-target="#myModal">
  EXAMINATION</button>
 <button class="btn btn-default" id="create-user" data-toggle="modal" ><a href="patient_test.php?id=<?php echo $_GET['exam'];?>">TEST</a>
  </button> 
  <button class="btn btn-default" id="create-user" data-toggle="modal" ><a href="add_patient_vital_signs.php?exam=<?php echo $_GET['exam'];?>">VITAL SIGNS</a>
  </button>
  <button class="btn btn-default" id="create-user" data-toggle="modal" >
 <a href="proc_pat.php?id=<?php echo $_GET['exam'];?>"> PROCEDURES</a></button><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a>
      <?php
if(isset($_GET['update']))
{
  if($_GET['update']=='1')
  {
     echo"<font color='red'>The record is update....</font>";
  }
}
?>
    <?php
if(isset($_GET['error']))
{
  if($_GET['error']=='0')
  {
    echo"<font color='orange'>The record Exist</font>";
  }
  if($_GET['error']=='1')
  {
    echo"<font color='green'>The record is saved</font>";
  }
  if($_GET['error']=='2')
  {
    echo"<font color='red'>Cannot save the record</font>";
  }
}
?>




</div>
        <?php

  
        //display patients of that particular doctor
          $query=mysql_query("select * from prescription where patient_id='$pat_id' ");
          if($query)
          {
            echo "<table class='table table-hover' width='100%'>
            <th>Case History</th>
            <th>Medication</th>
            <th>Discription</th>
            <th>Report Type</th>
            <th>Document Type</th>
            <th>Lab Discription</th>
            <th>Action</th><tr/>";            
            while($row=mysql_fetch_assoc($query))
            {
                    $id=$row['patient_id'];
                    echo "<td>".$row['case_history']."</td>
                        <td>".$row['medication']."</td>
                        <td>".$row['discription']."</td>
                        <td>".$row['report_type']."</td>
                        <td>".( file_exists('uploads/'.$row['file_name']) ? '<img src="uploads/'.$row['file_name'].'" width="100%" />' : 'N/A' )."</td>
                        <td>".$row['lab_discription']."</td>
                          <td><a href='edit_diagnostic.php?id=$id'>
                          <span class='glyphicon glyphicon-user' title='Edit'>Edit</span></a>
                          
                          </td></tr>";
            }
            echo "</table>";
          }
          else
          {
          
          
            echo "Cannot query the table";                                                          
          }


    ?>
     
 <hr style="border:1px solid lightgrey;">
 
 
 
 
 

</div>

<?php
include('includes/footer.php');
?>