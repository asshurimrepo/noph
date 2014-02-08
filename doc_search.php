<?php
include('includes/header.php');
include('includes/config.php');
?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">

<div id="Lside">

<div id="leftMenu">
  <details>
      <summary>Patients</summary>
         <a href="patient_add.php">Patients Record Entry</a>
         <a href="home.php">Patients Record</a>
	       <a href="lab_test.php">Patient Lab-Test</a>
         <a href="vital_signs_measurements.php">Vital Signs</a>
         <a href="procedures.php">procedure</a>
      </details>
      <details>
        <summary>Doctors</summary>
        <a href="doc.php">Doctors Table</a>
        <a href="doc_search.php">Doctors Records</a>
      </details>	 
	  <details>
		<summary>Accountant</summary>
            <a href="#">Add invoice</a>
            <a href="accountant.php">Invoice</a>
		<a href="#">Subcategory C</a>
		<a href="#">Subcategory D</a>
		<a href="#">Subcategory E</a>
	  </details>
	  <details>
		<summary>Menu Item 4</summary>
		<a href="#">Subcategory A</a>
		<a href="#">Subcategory B</a>
		<a href="#">Subcategory C</a>
	  </details>
</div>
</div>

<div id="form3">
    <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Doctors ID</th> 
                      
                      <th>Doctors Name</th>
                      
                      <th>Department & Ward</th>
                      
                      <th>Gender</th>
                      
                      <th>Tel</th>
                      
                      <th>Room</th>
                      <th>Action</th>
                      </tr>
                  </thead>
             
                  <tbody>
                    <?php
                        //set up mysql connection
                        mysql_connect("localhost", "root", "") or die(mysql_error());
                        //select database
                        mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM doctors") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_assoc($result)) {
                            // Print out the contents of the entry 
                            $id=$row['doctor_id'];
                            echo "<tr>";
							echo "<td>" . $row['doctor_id'] . "</td>";
							echo "<td>" . $row['doc_fname']."&nbsp;". $row['doc_mname']."&nbsp;". $row['doc_lname'] . "</td>";
							echo "<td style='width:30%'>" . $row['dept'] . "</td>";
							echo "<td>". $row['doc_gender'] . "</td>";
							echo "<td>" . $row['tel'] . "</td>";
							echo "<td>" . $row['room'] . "</td>";
							echo "<td>
							<a href='doc_patients_in.php?id=$id'><span class='glyphicon glyphicon-user' title='Inpatient'>InPatient</span></a>|
							<a href='doc_patients_out.php?id=$id'><span class='glyphicon glyphicon-user' title='Outpatient'>OutPatient</span></a>
							</td></tr>";
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
