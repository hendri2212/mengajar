<?php
    $conn->query("CREATE TABLE gender (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        gender char(50)
    )");

    $conn->query("INSERT INTO gender (gender) VALUES
        ('Male'),
        ('Female')
    ");
?>