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
                      <th>Patients ID</th>
             <!-----
                      <th>Firstname</th>
                      
                      <th>MidName</th>
             
                      <th>Lastname</th>
             ------>
             		  <th>Name</th>
                      
                      <th>Lab_test</th>
                    </tr>
                  </thead>
             
                  <tbody>
                    <?php
                        //set up mysql connection
                        mysql_connect("localhost", "root", "") or die(mysql_error());
                        //select database
                        mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM lab") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_array($result)) {
                            // Print out the contents of the entry 
                            echo '<tr>';
                            echo '<td>' . $row['patient_id'] . '</td>';
							echo '<td>' . $row['fname']."&nbsp;". $row['mid_init']."&nbsp;". $row['lname'] . '</td>';
                            //echo '<td>' . $row['fname'] . '</td>';
							//echo '<td>' . $row['mid_init'] . '</td>';
                            //echo '<td>' . $row['lname'] . '</td>';
                            echo '<td>' . $row['Lab_test'] . '</td>';
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
