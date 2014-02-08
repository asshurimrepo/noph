<?php
session_start();
include('includes/header.php');
include('includes/config.php');
?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="home.php"><span class="glyphicon glyphicon-home pull-right">Home</span></a><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">


<div id="form3">



<table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Patient_ID</th> 

                      <th>Patient Name</th>

                      <th>Category</th>

                      <th>Department | Ward</th> 

                      <th>Room</th>

                       <th>Address</th>

                      <th>Action</th>
                      </tr>
                  </thead>
             
                  <tbody>
                    <?php
					$doc=$_GET['id'];
					$_SESSION['doc_id']=$_GET['id'];
			
                        // Retrieve all the data from the "tblstudent" table
                       $result = mysql_query("SELECT patients_info.fname,patients_info.mname,patients_info.lname,patients_info.patient_id,patients_info.dep_ward,
                        patients_info.address,vital_signs_measurements.room,vital_signs_measurements.patient_id,vital_signs_measurements.category 
                        FROM patients_info left join vital_signs_measurements on patients_info.patient_id=vital_signs_measurements.patient_id 
                        where vital_signs_measurements.doctor_id='$doc' and vital_signs_measurements.category='Outpatient'") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
						if($result)
						{
								while ($row = mysql_fetch_assoc($result)) {
									// Print out the contents of the entry 
									$id=$row['patient_id'];
									echo "<tr>";
									echo "<td>" . $row['patient_id'] . "</td>";
									echo "<td>" . $row['fname']."&nbsp;". $row['mname']."&nbsp;". $row['lname'] . "</td>";	
									echo "<td>" . $row['category'] . "</td>";
									echo "<td>" . $row['dep_ward'] . "</td>";
					                echo "<td>" . $row['room'] . "</td>";
					                echo "<td>" . $row['address'] . "</td>";
									echo "<td>
									<a href='diagnostic.php?exam=$id'><span class='glyphicon glyphicon-user' title='Patient's Profile'>Patient's Profile</span></a>
									
									</td></tr>";
								}
						}
                        ?>      
             		

                  </tbody>  
            </table>





</div>

</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
