<?php
    mysqli_query($conn, "CREATE TABLE user (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name varchar(100),
        gender enum('male', 'female'),
        religion enum('Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha'),
        images varchar(255)
    )");
?>