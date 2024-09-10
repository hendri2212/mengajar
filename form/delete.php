<?php
    include './database/connection.php';
    mysqli_query($conn, "DELETE FROM user WHERE id='$_GET[id]'");
    header('Location: index.php');
?>