<?php 
	
	$request = true;
	include 'inc/connection.php';



	// RUN DTR
	function check_crendentials(){
		$user=mysql_escape_string($_POST['user']);
		$pass=mysql_escape_string($_POST['pass']);
		$data = db_select('cust_info', '*', "WHERE username='$user' AND password='$pass'", true);


		if(isset($data->id)):
			$_SESSION['user'] = $data;
			$_SESSION['is_login'] = true;
			if($data->is_admin)
				redirect("../admin.php");
			else
				redirect("../user.php?key=".$data->custno."&save=1");
		else:
			$_SESSION['err'] = "<b>Access Denied!</b>";
			redirect();	
		endif;

		
	}