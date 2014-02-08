<div style="margin-left:100px;">
<div style="border:1px solid black">
<div>
<td class="right"><img src="images/logo.png" width="50" height="50"/></td>
<div style="text-align:center">
NOPH-Negros Oriental Provincial Hospital
</br>
Electronic Patient Record Management System
<hr>
Discharge Summary
<hr>
</div>
</div>
<?php 
  
  include('includes/config.php');
  $id=$_GET['id'];

$result = mysql_query("SELECT *  FROM prescription where id='$id'");

    echo "<table width='100%'><tr/>";
if ($result)
 {
     while( $data=mysql_fetch_assoc($result))
      {
        echo "<th>Doctor ID: </th><td>". $data['doctor_id']."</td><tr/>";
        echo "<th>Patient ID: </th><td>". $data['patient_id']."</td><tr/>";
        echo "<th>History: </th><td>" .$data['case_history']."</td><tr/>";
        echo "<th>Medication: </th><td>" .$data['medication']."</td><tr/>";
        echo "<th>Description: </th><td>" .$data['discription']."</td><tr/>";
        echo "<th>Report: </th><td>" .$data['report_type']."</td><tr/>";
        echo "<th>Time: </th><td>" .$data['Y/m/d h:i:s A']."</td><tr/>";
      }
}
echo "</table>";
echo "</div>";
?>
 
</div>
<div>
  <script type="text/javascript">
  window.print();
</script>

</div>
