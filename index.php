<?php
    session_start();
    if (empty($_SESSION['status'])) {
        header("Location: login.php");
    }
?>
<html>
<head>
    <title>Belajar Session</title>
</head>
<body>
    <h1>HALAMAN UTAMA</h1>
    <?php
        echo "<h2> Selamat Datang ".$_SESSION['status']."</h2>";
        // echo md5("12345");
        echo strlen('p6m6s68q4e0irjvd6ucceaa1hp');
    ?>
    <br><br>
    <a href="logout.php">Log Out</a>
</body>
</html>