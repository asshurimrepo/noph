<?php
include('includes/header.php');

?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">
    
    <div id="form3">
         <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Invoice id</th>   

                      <th>Patient ID</th>

                      <th>Patient</th> 
                      
                      <th>Title</th>
                      
                      <th>Description</th>
                      
                      <th>Amount</th>
                      
                      <th>Time</th>
                      
                      <th>Status</th>

                      <th>Option</th>
                      </tr>
                  </thead>
             
                  <tbody>
                    <?php
                        
                        $status = ['Paid'=>'<span class="label label-success">Paid</span>', 'Unpaid'=>'<span class="label label-danger">Unpaid</span>'];

                         //Make Payment
                        if(isset($_GET['pay_id'])):
                           $sql = "UPDATE `noph`.`invoice` SET `status`='Paid' WHERE  `invoice_id`=".$_GET['pay_id'];
                           mysql_query($sql);
                        endif;  

                        //set up mysql connection
                        // mysql_connect("localhost", "root", "") or die(mysql_error());
                        //select database
                        mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM invoice") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row

             
                        while ($row = mysql_fetch_assoc($result)) {
                            // Print out the contents of the entry 
                            $id=$row['invoice_id'];
                            $id=$row['patient_id'];
                            echo "<tr>";
              echo "<td>" . $row['invoice_id'] . "</td>";              
              echo "<td>" . $row['patient_id'] . "</td>";
              echo "<td>" . $row['fname']."&nbsp;". $row['mname']."&nbsp;". $row['lname'] . "</td>";
              echo "<td>" . $row['title'] . "</td>";
              echo "<td>". $row['description'] . "</td>";
              echo "<td>" . $row['amount'] . "</td>";
              echo "<td>" . $row['creation_timestamp'] . "</td>";
              echo "<td>" . $status[$row['status']] . ($row['status'] == 'Unpaid' ? ' | <a href="?pay_id='.$row['invoice_id'].'" class="btn btn-xs btn-primary">Take cash payment</a>' : '') . "</td>";
              echo "<td>
              
              <a href='edit.php?id=$id'><span class='glyphicon glyphicon-icon-wrench' title='Edit'>Edit</span></a>|
              <a href='delete_invoice.php?id=$id'><span class='glyphicon glyphicon-user' title='Delete'>Delete</span></a>
              </td></tr>";
                        }
                        ?>      
                

                  </tbody>  
            </table>

	</div>
             
 </div>
 <script type="text/javascript">
window.print();
 </script>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
