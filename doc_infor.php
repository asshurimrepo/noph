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
<div class="alert alert-info" style="text-align:center;padding:5px;font-size:14px">
  You are sign-in as <?php echo "<b><font color='#300000'>". $_SESSION['username']."</font></b>";?>
  
  <a href="logout.php"><span class="glyphicon glyphicon-remove">Logout</span></a>
</div>
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
                    include('includes/config.php');
                    $id= $_SESSION['staff_no'];
                     
                        // Retrieve all the data from the "tblstudent" table
               $result = mysql_query("SELECT * FROM doctors where doctor_id='$id'") or die(" Cannot Connect the Database");
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
