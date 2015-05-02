<?php
    $id = $_GET['id_buku'];
    if ($id != "") {
        include "../conn.php";
        $sql    = "DELETE FROM buku WHERE id = $id";
        mysql_query ($sql);
    }
    
    header('location:staf-home.php');
?>