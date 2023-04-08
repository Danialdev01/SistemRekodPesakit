<?php
    include('config.php');
    $id_pesakit = $_GET['id_pesakit'];
    $result = mysqli_query($connect, "DELETE FROM pesakit WHERE id_pesakit='$id_pesakit'");
    header("location:index.php");
?>
