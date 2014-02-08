<?php
if (isset($_POST['username'])&&isset($_POST['password'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$password_hash = md5($password);
	
	if(!empty($username)&&!empty($password)){
		 $msg="";
		 $query = "SELECT `id` FROM `user` WHERE `username`='".mysql_real_escape_string($username)."' AND `password`= '".mysql_real_escape_string($password_hash)."'";
		 if ($query_run = mysql_query($query)){
		   $query_num_rows = mysql_num_rows($query_run);
		   
		   if ($query_num_rows==0) {
			 $msg='<div style="background-color:green">Invalid username/password combination.</div>';  
			} else if ($query_num_rows==1){
			  $user_id = mysql_result($query_run, 0, 'id');	
			  $_SESSION['user_id']=$user_id;
			  header('Location:home.php'); 
			}	 
		  }
		  			
		} else {
		
			
			
		  $msg='You must supply a username and a password.';
			
			}
	}

?>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css" />
 <link type="text/css" rel="stylesheet" href="index.css">

<div id="head2"><img src="images/head2.jpg" height="80px" width="1350px"></div>




<div id="title" align="center" >
<form method="post" action="?entry=complete">
<fieldset class="myForm" style="margin:80 auto; margin-left:150; margin-right:150">
<legend class="text-Regular_Grey">
  <strong>Enter your Credentials</strong>
</legend>
<?php if(!empty($msg)){echo $msg;}?>
<br>
<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type="text" style="font-size:20px;font-weight:bold;font-family:century;width:250px" name="username"><br>
Password: <input type="password" style="font-size:20px;font-weight:bold;font-family:century;width:250px" name="password"><br><br>
<input type="submit" value="Log in" style="font-size:20px;font-weight:bold;font-family:century;width:100px"><br><br><br>

<td align="center"><b><a href="register.php">Sign in or Register</a></b></td>
</fieldset>
</form>
</div>