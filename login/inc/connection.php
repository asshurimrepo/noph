<?php 
	session_start();
	include 'inc/func.php';
	include 'inc/db_func.php';
	
	include '../includes/config.php';
	//just_connect_to_db('waterdistrict');

	if(isset($request)):

		if(isset($_GET['ref'])):
		$ref_func = $_GET['ref']; //categories_new

		if(function_exists($ref_func)):
			$ref_func();
		else:
			redirect();
		endif;
		else:
			redirect();
		endif;

	endif;