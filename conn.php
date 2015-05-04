<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="rpl";
	
	$connect=mysql_connect($server, $username, $password);
	if(!$connect){
		echo "Failed";
	}
	mysql_select_db($database) or die ("Database tidak dapat diakses");
	
	//sep udah sep, sep sep sep
?>
