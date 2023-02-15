<?php
    // Server Connection
    $conn   = new mysqli('localhost', 'root', '');

    $drop   = "DROP DATABASE IF EXISTS pengaduan";
    $conn->query($drop);

    $sql    = "CREATE DATABASE pengaduan";
    if ($conn->query($sql) === TRUE) {
        echo "Database created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
    
    // Call Database
    $database = 'pengaduan';
    mysqli_select_db($conn ,$database);

    // Create Table
    $conn->query("CREATE TABLE `pengaduan` (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        date DATETIME default CURRENT_TIMESTAMP,
        nik CHAR(16),
        report text,
        image VARCHAR(255),
        status enum('0','proses','selesai') DEFAULT '0',
        INDEX (nik)
    )");

    // Insert Data Users
    // $conn->query(
    //     "INSERT INTO `user`(full_name, username, password, role)
    //     VALUES  ('M. Ramlie', 'owner', md5('owner'), 'owner'),
    //             ('Fajrin', 'admin', md5('admin'), 'admin'),
    //             ('Hendri', 'hendri', md5('hendri'), 'owner'),
    //             ('Rahimah', 'kasir', md5('kasir'), 'kasir')");
?>