<?php
ob_start();
  session_start();
  if(!(isset($_SESSION['username'])) && !(isset($_SESSION['status'])))
  {
    header('Location:index.php');
  }
?>
<?php 
include('includes/config.php');
?>

<?php


$id    = $_GET['id'];

    mysql_query("delete from invoice where id='$id'");
    echo "Record deleted";
?>

