<?php
    session_start();
	if(!isset($_SESSION['nama'])){
        header('location:../');
	}else{
		header('location:staf-home.php');
    }
?>