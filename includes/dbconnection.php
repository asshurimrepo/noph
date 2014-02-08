<?php
$dbms="mysql";
$dbhost="localhost";
$dbname="noph";
$dbuser="root";
$dbpasswd="";

//Establish connection
$link=mysql_connect($dbhost, $dbuser, $dbpasswd) 
or die (mysql_error());

$status = mysql_select_db($dbname, $link) or die (mysql_error());

//echo "Connected Successfully to ". $dbname.'<br>';
?>