<form action="" method="post">
    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="text" name="password">

    <input type="submit" name="submit" value="Login">

    <br><br>
    <a href="register.php">
        <input type="button" value="Register">
    </a>
</form>
<?php
    if (isset($_POST['submit'])) {
        include_once "connection.php";

        $username   = $_POST['username'];
        $password   = md5($_POST['password']);

        $query      = $conn->query("SELECT * FROM user WHERE username='$username' AND password='$password'");
        $data       = mysqli_fetch_object($query);

        session_start();
        if ($username==$data->username && $password==$data->password) {
            $_SESSION['status'] = 'logged';
            $_SESSION['nama']   = $data->full_name;
            $_SESSION['role']   = $data->role;
            header("Location: index.php");
        } else { ?>
            <script>
                alert('Username atau Password Anda Salah');
            </script>
<?php   }
    }
?>