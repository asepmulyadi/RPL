<?php
	include "conn.php";
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	$dataAdmin = mysql_query("select *from petugas where username='$username' and password='$password'") or die(mysql_error()); //ini proses select di database
	if($data = mysql_fetch_array($dataAdmin)){
		$_SESSION['nama'] = $data['nama'];
		header('location:staf/staf-home.php');
	}else{
		header('location:index.php?status=gagal');
	}
?>
