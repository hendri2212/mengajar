<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "root";

    $conn   = new mysqli($servername, $username, $password);

    $drop   = "DROP DATABASE IF EXISTS pelajar";
    $conn->query($drop);

    $sql    = "CREATE DATABASE pelajar";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    include "connection.php";
    include "create_table_gender.php";
    include "create_table_user.php";
?>