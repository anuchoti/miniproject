<?php
    require_once('includes/db6.php');

    if (!isset($_GET['id'])){
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM upload WHERE id='" . $id . "' LIMIT 1";
    if (mysqli_query($conn, $sql)){
        header("Location: login2.php");
    }

?>