<?php

require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()) {
	$firstname = getuserfield('firstname');
	$surname = getuserfield('surname');
  echo 'You\'re logged in, '.$firstname.' '.$surname.' <a href="logout.php">Log out</a><br>';	 
} else {
	
  include 'loginform.inc.php';
}

?>