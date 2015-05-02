<?php
	include "../conn.php";
	session_start();
	$dataAdmin = mysql_query("insert into buku values(null, '$_POST[judul]', $_POST[tahun], '$_POST[pengarang]', '$_POST[penerbit]')") or die(mysql_error());
	header('location:staf-home.php');
?>
