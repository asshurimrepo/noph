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
<div class="alert alert-info" style="text-align:center;padding:5px;">
 					<form action="patient_search.php" method="post">
					<table width="100%">
						<td width="400px"></td>
						<td  style=" text-align:center;background-color:lightgrey;color:red;font-size:20px;font-weight:bold" align="right">MANAGE DOCTORS' INFORMATION</td>
						<td align="right">
						<input type="text" style="width:250px;text-align:center;font-family:century;font-weight:bold" class="form-control" placeholder="Enter Search Item" id="search"name="search"></td>
						
					</table>
					</form>
  </div>
  <div style="text-align:center">
  <a href="doc.php"><span class="glyphicon glyphicon-user">DOCTORS</span>|
  <a href="nurse_infor.php"><span class="glyphicon glyphicon-plus">ADD</span>|
  <a href="patients.php"><span class="glyphicon glyphicon-user">PATIENTS</span>|
  <a href="accountant.php"><span class="glyphicon glyphicons-star">INVOICE</span>|
  <a href="lab_test.php"><span class="glyphicon glyphicons-star">TEST</span>|
  <a href="vital_signs_measurements.php"><span class="glyphicon glyphicon-forward-sign">VITAL</span>|
  <a href="procedures.php"><span class="glyphicon glyphicons-stars">PROCEDURES</span>
  </a></div>
<div id="container">         
    <div style="overflow-y:scroll;height:400px" id="form3">
    <table id="table" class="table table-hover">
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
                        // mysql_connect("localhost", "root", "mysql") or die(mysql_error());
                        //select database
                        // mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM doctors") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_assoc($result)) {
                            // Print out the contents of the entry 
                            $id=$row['doctor_id'];
                            echo "<tr>
							 <td>" . $row['doctor_id'] . "</td>
							 <td>" . $row['doc_fname']."&nbsp;". $row['doc_mname']."&nbsp;". $row['doc_lname'] . "</td>
							 <td style='width:30%'>" . $row['dept'] . "</td>
							 <td>". $row['doc_gender'] . "</td>
							 <td>" . $row['tel'] . "</td>
							 <td>" . $row['room'] . "</td>
							 <td><span class='glyphicon glyphicon-user'><a href='doc_patients_in.php?id=$id'>InPatients</a></span>| 								
							
							<span class='glyphicon glyphicon-user'><a href='doc_patients_out.php?id=$id'>OutPatients</a></span></td></tr>";
                        }
                        ?>      
             		

                  </tbody>  
            </table>
            </div>
            
        </div>
     <!--script-->
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

<!---->   
        


</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
