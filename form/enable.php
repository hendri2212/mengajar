<?php
    include './database/connection.php';
    $query = mysqli_query($conn, "SELECT * FROM user WHERE id='$_GET[id]'");
    $data = mysqli_fetch_object($query);
    if ($data->status == 'enable') {
        mysqli_query($conn, "UPDATE user SET status = 'disable' WHERE id='$_GET[id]'");
    } else {
        mysqli_query($conn, "UPDATE user SET status = 'enable' WHERE id='$_GET[id]'");
    }
    header('Location: index.php');
?>