<?php
	include "../conn.php";
	session_start();
	if(!isset($_SESSION['nama'])){
		header('location:../index.php');
	}
	$dataAdmin = mysql_query("insert into buku values(null, '$_POST[kode]', '$_POST[judul]', $_POST[tahun], '$_POST[pengarang]', '$_POST[penerbit]')") or die(mysql_error());
	header('location:staf-home.php');
?>

