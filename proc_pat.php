<?php
session_start();
include('includes/header.php');
include('includes/config.php');
?>
<!--Start of the container here-->

<div id="container">
    
        <div id="form3">
<br>
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
<br>

                      
    <div style="height:55px;color:green" class="alert alert-info">
    <div style="float:left;font-size:20px">PROCEDURE </div>
    <div style="float:right"><a href="diagnostic.php?exam=<?php echo $_SESSION['patient_id'];?>">
    <span class="glyphicon glyphicon-backward">Back</span></a></div></div>
<table class="table table-hover">
                  <thead>
                    <tr>
                 
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
 $_SESSION['patient_id']=$_GET['id'];
 $id=$_SESSION['patient_id'];
                        $result = mysql_query("SELECT * FROM procedures where patient_id='$id'") or die(mysql_error());
                        // store the record of the "tblstudent" table into $row
             
                        while ($row = mysql_fetch_array($result)) {
                            // Print out the contents of the entry 
                            echo '<tr>';
              //echo '<td>' . $row['fname']."&nbsp;". $row['mid_init']."&nbsp;". $row['lname'] . '</td>';
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
