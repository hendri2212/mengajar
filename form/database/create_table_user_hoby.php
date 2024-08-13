<?php
    mysqli_query($conn, "CREATE TABLE user_hoby (
        id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        user_id int NOT NULL,
        hoby_id int NOT NULL,
        INDEX (user_id, hoby_id),
        FOREIGN KEY (user_id) REFERENCES user(id),
        FOREIGN KEY (hoby_id) REFERENCES hoby(id)
    )");
?>