<?php
    $id = $_GET['id_buku'];
    if ($id != "") {
        $sql    = "DELETE FROM buku WHERE id = $id";
    }
    
    header('location:staf-home.php');
?>