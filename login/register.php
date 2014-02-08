<?php
require 'core.inc.php';
require 'connect.inc.php';

if (!loggedin()) {

if (isset($_POST['username'])&&isset($_POST['password'])&&isset($_POST['password_again'])&&isset($_POST['firstname'])&&isset($_POST['surname'])) {
	$username = $_POST['username'];
	$msg="";
	$password = $_POST['password'];
	$password_again = $_POST['password_again'];
	$password_hash = md5($password);
	
	$firstname = $_POST['firstname'];
	$surname = $_POST['surname'];	

	if (!empty($username)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)){
	  if (strlen($username)>60||strlen($firstname)>60||strlen($surname)>40) {
		  echo 'please either to maxlenth f fields.';
		  } else {
	   if ($password!=$password_again){
		$msg='Passwords do not match.';
        } else {
	  
	  $query = "SELECT `username` FROM `user` WHERE `username`='$username'";
	  $query_run = mysql_query($query);
	  
	  if (mysql_num_rows($query_run)==1){
	   echo 'The username'.$username.' already exists.';
	  } else {
		$query = "INSERT INTO `user` VALUE ('','".mysql_real_escape_string($username)."','".mysql_real_escape_string($password_hash)."','".mysql_real_escape_string($firstname)."','".mysql_real_escape_string($surname)."')";
		if ($query_run = mysql_query($query)){
		  header('Location: register_success.php');
		} else {
		  $msg='Sorry, we couldn\'t register you at this time. Try again later.';
		} 
	  }
	}
	}
	} else {
	  $msg= 'All fields are required.';	
	}

}
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NOPH</title>
</head>

<body id="body">
<div id="head"><img src="images/head2.jpg" height="80px" width="1350px"></div>
<div id="title" align="center" >
<form method="post" action="?entry=complete">
<div style="width:400px">
<fieldset class="myForm" style="margin:80 auto; margin-left:150; margin-right:150">
<legend class="text-Regular_Grey">
  <strong>Enter your Credentials</strong>
</legend>
<?php
if(!empty($msg))
{
echo $msg;
}
?>

<form action="register.php" method="POST">
Username:<br> <input type="text" name="username" maxlength="60" value="<?php if (isset($username)) { echo $username; } ?>"><br><br>
Password:<br> <input type="password" name="password"><br><br>
Password again:<br> <input type="password" name="password_again"><br><br>
Firstname:<br> <input type="text" name="firstname" maxlength="60" value="<?php if (isset($firstname)) { echo $firstname; } ?>"><br><br>
Surname:<br> <input type="text" name="surname" maxlength="60" value="<?php if (isset($surname)) { echo $surname; } ?>"><br><br>
<input type="submit" value="Register">
<td align="center"><b><a href="index.php">Log in</a></b></td>   
</fieldset>
</form>
</div>
</div>

</body>
</html>



</form>

<?php	
} else if(loggedin()) {
  echo 'you\'re already registered and logged in.';	
}
?>
