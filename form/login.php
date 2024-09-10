<?php
    session_start();
    include "./database/connection.php";

    if (!empty($_SESSION['token'])) {
        header('Location: index.php');
    }
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div class="row mx-auto" style="max-width: 460px">
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhz3mzoSAQyAnDHzL9lkjETrTRmn9cpWnCVhkJgdMfiOyBqmZA8OODuUBJgIkyav-I_DTqjNlVWsSTCWVlCEnXkBfPOOsx5ETz6Lp_AtKzHqIoenFjbvLy71tAgHK8qjNkvQVDfT9YpJgk/s320/Logo+SMEA.jpg" alt="Hendri Arifin" class="img-fluid w-25 my-5 mx-auto">
    <form action="" method="post">
        <div class="mb-2">
            <label>Username</label>
            <input type="text" name="username" placeholder="Username" required class="form-control form-control-lg">
        </div>
        <div class="mb-2">
            <label>Password</label>
            <input type="password" name="password" placeholder="Password" required class="form-control form-control-lg">
        </div>
        <div class="d-grid">
            <input type="submit" value="Login" class="btn btn-lg btn-success">
        </div>
    </form>
    <div class="d-flex">
        <label>Belum punya akun</label><a href="register.php" class="text-decoration-none mx-2">Register</a>
    </div>
</div>

<?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = md5('$password')");
        $user = mysqli_fetch_object($query);
        if ($user->status == 'enable') {
            $_SESSION['token'] = bin2hex(random_bytes(32));
            $_SESSION['role'] = $user->role;
            $_SESSION['name'] = $user->full_name;
            $_SESSION['id'] = $user->id;
            header('Location: index.php');
        } else { ?>
            <script>
                alert('Username atau password salah atau akun Anda tidak aktif');
            </script>
        <?php }
    }
?>