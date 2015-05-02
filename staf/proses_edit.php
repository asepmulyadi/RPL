<?php
	include "../conn.php";
	session_start();
	if(!isset($_SESSION['nama'])){
		header('location:../index.php');
	}
	$dataAdmin = mysql_query("update buku set kode='$_POST[kode]', judul='$_POST[judul]', tahun=$_POST[tahun], pengarang='$_POST[pengarang]', penerbit='$_POST[penerbit]' where id=$_GET[id]") or die(mysql_error());
	header('location:staf-home.php');
?>
