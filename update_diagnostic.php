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

$query = mysql_query("select * from users where id='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?>
<html>
<body>
<div style="border:1px solid;"> 

<form action="edit.php" method="post">
<input type='hidden' name="id" value="<?=($_GET['id'])?$_GET['id']:''?>">
Fullname <input type="text" name="name" value="<?=$row['name']?>"><br>
Age <input type="text" name="age" value="<?=$row['age']?>"><br>
<input type="submit" value="Update">
<input type="reset" value="Reset">
</form>    
<a href="index.php" >[Back to home]</a>
</div>
</body>
</html>

<?php include("includes/footer.php");?>