<?php
include('includes/header.php');

?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">
    
        <div id="form3">
			<table class="table table-striped">
                  <thead>
                    <tr>
             <!--   <th>Patients ID</th>
                      
                      <th>Firstname</th>
                      
                      <th>MidName</th>
             
                      <th>Lastname</th>
              -->
                      <th>Name</th>
                      
                      <th>Temp</th>
                      
                      <th>Pulse Rate</th>
             
                      <th>Respiratory Rate</th>
             
                      <th>Blood Pressure</th>
                      
                       <th>Weight</th>
             
                      <th>Heights</th>
                      
                      <th>Abdminal Girth</th>

                      <th>Category</th>

                      <th>room</th>

                      <th>Doctors_ID</th>

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
                        $result = mysql_query("SELECT * FROM vital_signs_measurements") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_array($result)) {
                          $id=$row['patient_id'];
                            // Print out the contents of the entry 
                            echo '<tr>';
                            //echo '<td>' . $row['patient_id'] . '</td>';
							echo '<td>' . $row['fname']."&nbsp;". $row['mid_init']."&nbsp;". $row['lname'] . '</td>';
							//echo '<td>' . $row[''] . '</td>';
                            //echo '<td>' . $row[''] . '</td>';
                            echo '<td>' . $row['temp'] . '</td>';
							echo '<td>' . $row['pulserate'] . '</td>';
                            echo '<td>' . $row['respiratory_rate'] . '</td>';
                            echo '<td>' . $row['blood_pressure'] . '</td>';
							echo '<td>' . $row['weight'] . '</td>';
							echo '<td>' . $row['height'] . '</td>';
							echo '<td>' . $row['abdominal_girth'] . '</td>';
              echo '<td>' . $row['category'] . '</td>';
              echo '<td>' . $row['room'] . '</td>';
              echo '<td>' . $row['doctor_id'] . '</td>';
              echo"<td><a href='Print.php?id=$id'><span class='glyphicon glyphicon-icon-wrench' title='Print'>Print</span></a></td></tr>";
						
                        }
                        ?>      
             
                  </tbody>  
            </table>
            <!-- /container -->
        </div>
</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
