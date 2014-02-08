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
                      <th>Name</th> 
                <!---    
                      <th>Patients ID</th>
                   
                      <th>Firstname</th>
                      
                      <th>MidName</th>
             
                      <th>Lastname</th>
               	---->       
                      <th>Hot H2O Bag Appli</th>
             
                      <th>Tepid Sponge Bath</th>
             
                      <th>Monitor Input/Output</th>

                      <th>Diet Instruction</th>
                      
                      <th>O2 Inhalation</th>
                      
                      <th>Suction</th>
                      
                      <th>Heat Lamp appli</th>
                      
                      <th>Catheterization</th>
                      
                      <th>NGT Feeding</th>
                      
                      <th>Wound Care</th>
                      
                      <th>Nebulization</th>
                    </tr>
                  </thead>
             
                  <tbody>
                    <?php
                        //set up mysql connection
                        mysql_connect("localhost", "root", "") or die(mysql_error());
                        //select database
                        mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM procedures") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_array($result)) {
                            // Print out the contents of the entry 
                            echo '<tr>';
							echo '<td>' . $row['fname']."&nbsp;". $row['mid_init']."&nbsp;". $row['lname'] . '</td>';
                            //echo '<td>' . $row['patient_id'] . '</td>';
							//echo '<td>' . $row['fname'] . '</td>';
							//echo '<td>' . $row['mid_init'] . '</td>';
                           // echo '<td>' . $row['lname'] . '</td>';
							echo '<td>' . $row['hotwater_bag_appli'] . '</td>';
							echo '<td>' . $row['tepid_sponge_bath'] . '</td>';
							echo '<td>' . $row['monitoring I/O'] . '</td>';
							echo '<td>' . $row['diet_instruction'] . '</td>';
							echo '<td>' . $row['O2_inhalation'] . '</td>';
							echo '<td>' . $row['suction'] . '</td>';
                            echo '<td>' . $row['heat_lamp_appli'] . '</td>';
                            echo '<td>' . $row['catheterization'] . '</td>';
							echo '<td>' . $row['ngt_feeding'] . '</td>';
							echo '<td>' . $row['wound_care'] . '</td>';
							echo '<td>' . $row['nebulization'] . '</td>';
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
