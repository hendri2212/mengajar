<?php
    mysqli_query($conn, "CREATE TABLE user (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        full_name varchar(100),
        gender_id int NOT NULL,
        INDEX (gender_id),
        FOREIGN KEY (gender_id) REFERENCES gender(id)
    )");
?>