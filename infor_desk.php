<?php
session_start();
  if(!isset($_SESSION['username']) || !isset($_SESSION['level']))
?>
<?php
include('includes/header.php');

?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>

        <div class="alert alert-info" style="text-align:center;padding:5px;font-size:14px">
 
  
 
            <form action="patient_search.php" method="post">
          <table width="100%">
          <td> You are sign-in as <?php echo "<b><font color='#300000'>". $_SESSION['username']."</font></b>";?>
 <a href="logout.php"><span class="glyphicon glyphicon-remove">Logout</span></a>
          </td>
            <td align="right">
            <input type="text" style="width:250px;text-align:center;font-family:century;font-weight:bold" class="form-control" placeholder="Enter Search Item" id="search"name="search"></td>
            
          </table>
          </form>
</div>
<div id="container">
    
        <div id="form3">

      <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Case History</th>

                      <th>Medication</th>

                      <th>Discription</th>

                      <th>Report Type</th>

                      <th>Document Type</th>

                      <th>Lab Discription</th>

                      <th>Action</th><tr/>  
                
                    </tr>
                  </thead>
             
                  <tbody>
                    <?php
                        //set up mysql connection
                        mysql_connect("localhost", "root", "") or die(mysql_error());
                        //select database
                        mysql_select_db("noph") or die(mysql_error());
                        // Retrieve all the data from the "tblstudent" table
                        $result = mysql_query("SELECT * FROM prescription") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_array($result)) {
                            // Print out the contents of the entry 
                            echo '<tr>';
             // echo '<td>' . $row['fname']."&nbsp;". $row['mid_init']."&nbsp;". $row['lname'] . '</td>';
                            $id=$row['id'];
               echo "<td>".$row['case_history']."</td>
                        <td>".$row['medication']."</td>
                        <td>".$row['discription']."</td>
                        <td>".$row['report_type']."</td>
                        <td>".$row['document_type']."</td>
                        <td>".$row['lab_discription']."</td>
              <td><a href='print.php?id=$id'><span class='glyphicon glyphicon-user' title='Print'>Print</span></a></td></tr>";
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
