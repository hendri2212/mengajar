<form action="" method="post">
    <label>Username</label>
    <input type="text" name="username" value="admin">

    <label>Password</label>
    <input type="text" name="password" value="12345">

    <input type="submit" name="submit" value="Login">
</form>
<?php
    include_once "connection.php";
    $username   = $_POST['username'];
    $query      = $conn->query("SELECT * FROM user WHERE username='$username'");
    $data       = mysqli_fetch_object($query);
    
    echo $data->full_name;

    if (isset($_POST['submit'])) {
        session_start();
        if ($_POST['username']=='admin' && $_POST['password']=='12345') {
            $_SESSION['status']= $_POST['username'];
            $_SESSION['role']= 'kasir';
            header("Location: index.php");
        } else { ?>
            <script>
                alert('Username atau Password Anda Salah');
            </script>
<?php   }
    }
?>