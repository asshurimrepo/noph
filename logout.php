<?php
session_start();
	if($_SESSION['username'] || $_SESSION['level'])
	{
		header("Location:index.php?error=4");
		unset($_SESSION['username']);
		unset($_SESSION['level']);
	}
?>