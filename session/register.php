<form action="" method="post">
    <label for="">Nama Lengkap</label> <br>
    <input type="text" name="full_name" id=""> <br><br>

    <label for="">Username</label> <br>
    <input type="text" name="username" id=""> <br><br>

    <label for="">Password</label> <br>
    <input type="text" name="password" id=""> <br><br>

    <input type="submit" name='register' value="Register">
</form>
<?php
    if (isset($_POST['register'])) {
        include "connection.php";
        $full_name  = $_POST['full_name'];
        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $query = $conn->query("INSERT INTO user (full_name, username, password)
        VALUES ('$full_name', '$username', '$password')");
        if ($query) { ?>
            <script>
                alert('Register Berhasil');
                window.location.href = "index.php";
            </script>
        <?php
        }
    }
?>