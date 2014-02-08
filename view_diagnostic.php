<?php
ob_start();
  session_start();
  if(!(isset($_SESSION['username'])) && !(isset($_SESSION['status'])))
  {
    header('Location:index.php');
  }
?>
<?php 
include('includes/header.php');
?>


<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("datamex",$konek) or die("Cannot connect to the database");

$query = mysql_query("select * from users order by id asc");
?>
<table border="1">
<tr>
    <td>Name</td>
    <td>Age</td>
    <td>Action</td>
</tr>
<?php

if(mysql_num_rows($query)>0){ 
    while($row= mysql_fetch_array($query)){ ?>
    <tr>
        <td><?=$row['name']?></td>
        <td><?=$row['age']?></td>
        <td><a href="update.php?id=<?=$row['id']?>">[Edit]</a>&nbsp;<a href="delete.php?id=<?=$row['id']?>">[Delete]</a></td>
    </tr>
<?php        
        
    }
        
}
else{
    
    echo "no record";
}

?>
<tr><td colspan="3"><a href="index.php" >[Add new record]</a>
</td></tr>
</table>


<?php include("includes/footer.php");?>