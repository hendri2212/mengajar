<?php
    mysqli_query($conn, "CREATE TABLE hoby (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        hoby_name varchar(100)
        -- INDEX (gender_id),
        -- FOREIGN KEY (gender_id) REFERENCES gender(id)
    )");
?>