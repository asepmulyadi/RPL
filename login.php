<?php
	include "conn.php";
	session_start();
	$dataAdmin = mysql_query("select *from petugas where username='$_POST[username]' and password='$_POST[password]'") or die(mysql_error());
	if($data = mysql_fetch_array($dataAdmin)){
		$_SESSION['id'] = $data['id'];
		header('location:beranda.php');
	}else{
		header('location:index.php?status=gagal');
	}
?>
