<form action="" method="post">
    <label>Username</label>
    <input type="text" name="username">

    <label>Password</label>
    <input type="text" name="password">

    <input type="submit" name="submit" value="Login">
</form>
<?php
    if (isset($_POST['submit'])) {
        session_start();
        if ($_POST['username']=='admin' && $_POST['password']=='12345') {
            $_SESSION['status']= $_POST['username'];
            header("Location: index.php");
        } else { ?>
            <script>
                alert('Username atau Password Anda Salah');
            </script>
<?php   }
    }
?>