<?php
    require_once('includes/db5.php');

    if (!isset($_GET['id'])){
        header("Location: index.php");
    }
    $id = $_GET['id'];
    $sql = "DELETE FROM feed WHERE id='" . $id . "' LIMIT 1";
    if (mysqli_query($conn, $sql)){
        header("Location: login1.php");
    }

?>