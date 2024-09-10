<?php
    mysqli_query($conn, "CREATE TABLE user (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name varchar(100),
        username varchar(100),
        password varchar(255),
        gender enum('male', 'female'),
        religion enum('Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha'),
        role enum('administrator', 'teacher', 'student'),
        images varchar(255),
        status enum('enable', 'disable') DEFAULT 'enable'
    )");

    mysqli_query(
        $conn,
        "INSERT INTO user (full_name, username, password, gender, religion, role, images)
        VALUE ('Admin', 'admin', md5('admin'), 'male', 'Islam', 'administrator', 'a.jpg'),
        ('Guru', 'guru', md5('admin'), 'male', 'Islam', 'teacher', 'a.jpg'),
        ('siswa01, 'siswa01', md5('admin'), 'male', 'Islam', 'student', 'a.jpg'),
        ('siswa02', 'siswa02', md5('admin'), 'male', 'Islam', 'student', 'a.jpg')
        ");
?>