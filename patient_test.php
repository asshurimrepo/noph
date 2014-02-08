<?php
session_start();
include('includes/header.php');
include('includes/config.php');
?>
<!--Start of the container here-->
<div id="headlogin">
<div><a href="logout.php"><span class="glyphicon glyphicon-close pull-right">Logout</span></a></div>
        </div>
<div id="container">
    
        <div id="form3">

            <?php
  
  $_SESSION['patient_id']=$_GET['id'];
  $pat_id=$_SESSION['patient_id'];
  $doc=$_SESSION['doc_id'];
  
    $query=mysql_query("select patients_info.fname,patients_info.dep_ward,patients_info.patient_id,patients_info.mname,patients_info.lname,
            patients_info.gender,patients_info.age,vital_signs_measurements.category,vital_signs_measurements.patient_id,vital_signs_measurements.doctor_id,
            doctors.doctor_id,doctors.doc_fname,doctors.doc_mname,doctors.doc_lname,doctors.room,doctors.dept
            from patients_info inner join vital_signs_measurements on patients_info.patient_id=vital_signs_measurements.patient_id
            inner join doctors on doctors.doctor_id=vital_signs_measurements.doctor_id where patients_info.patient_id='$pat_id' ");
  if($query)
  {
        while($data=mysql_fetch_assoc($query))
        {
          
          echo "Patient:&nbsp;". $data['lname'].",&nbsp;".$data['fname']."&nbsp;".$data['mname']."<br>";  
          echo "Category:&nbsp;". $data['category']."<br>";
          echo "Gender:&nbsp;". $data['gender']."<br>";
          echo "Age:&nbsp;". $data['age']."<br>";
          echo "Doctor:&nbsp;". $data['doc_fname'].",&nbsp;". $data['doc_mname']."&nbsp;".$data['doc_lname']."<br>";
          echo "Department:&nbsp;".$data['dept']."<br>";
          echo "Room:&nbsp;". $data['room']."<br>";
            
        }
        $id=$_SESSION['patient_id'];
      }
      else
      {
      echo "Cannot query the database";
      }
    ?>


                      
    <div style="height:55px;color:green" class="alert alert-info">
    <div style="float:left;font-size:20px">LABORATORY TEST</div>
    <div style="float:right"><a href="diagnostic.php?exam=<?php echo $_SESSION['patient_id'];?>">
    <span class="glyphicon glyphicon-backward">Back</span></a></div></div>

                    <?php
                    $id=$_GET['id'];
                    $i=1;
                        $result = mysql_query("SELECT * FROM lab where patient_id='$id'") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             			echo "<table class='table table-hover'><th></th><th style='color:maroon'>Description</th><th style='color:maroon'>Time Done</th><tr/>";

                        while ($row = mysql_fetch_array($result)) {
                            // Print out the contents of the entry 

                            echo '<td>'.$i.'</td><td>' . $row['Lab_test'] . '</td><td>'.$row['date_test'].'</td';
                        }
                        $i++;
                        echo "</table>";
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
