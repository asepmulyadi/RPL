<?php
    $id = $_GET['id_buku'];
	session_start();
	if(!isset($_SESSION['nama'])){
		header('location:../index.php');
	}
    if ($id != "") {
        include "../conn.php";
        $sql    = "DELETE FROM buku WHERE id = $id";
        mysql_query ($sql); //eksekusi
    }
    header('location:staf-home.php');
?>
