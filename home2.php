<?php
include('includes/header.php');
?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
         
<div id="container">
 

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>jQuery UI Tabs - Default functionality</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Doctors</a></li>
    <li><a href="#tabs-2">Patients</a></li>
    <li><a href="#tabs-3">Aenean lacinia</a></li>
  </ul>
  <div id="tabs-1">
    <p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
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
  <div id="tabs-2">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
 
 
</body>
</html>
</div>
</div>
<!--Footer begins here-->
<?php
include('includes/footer.php');
?>
