<?php
    // Server Connection
    $server = 'localhost';
    $username = 'root';
    $password = 'root';
    
    $conn   = new mysqli($server, $username, $password);

    $drop   = "DROP DATABASE IF EXISTS swalayan";
    $conn->query($drop);

    $sql    = "CREATE DATABASE swalayan";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    // Call Database
    $database = 'swalayan';
    mysqli_select_db($conn ,$database);

    // Create Table
    $conn->query("CREATE TABLE `user` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name CHAR(255),
        username VARCHAR(255),
        password VARCHAR(255),
        role enum('owner','admin','kasir')
    )");

    // Insert Data Users
    $conn->query(
        "INSERT INTO `user`(full_name, username, password, role)
        VALUES  ('M. Ramlie', 'owner', md5('owner'), 'owner'),
                ('Fajrin', 'admin', md5('admin'), 'admin'),
                ('Hendri', 'hendri', md5('hendri'), 'owner'),
                ('Rahimah', 'kasir', md5('kasir'), 'kasir')");
?>