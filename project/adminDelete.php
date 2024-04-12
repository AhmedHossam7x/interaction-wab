<?php
    include "server.php";
    $id = $_GET["id"];
    $sql = "DELETE FROM `users` WHERE id = $id";
    $result = mysqli_query($db, $sql);

    if ($result) {
    header("Location: admin.php");
    } 
?>