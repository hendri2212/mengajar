<?php
    session_start();
    if (empty($_SESSION['status'])) {
        header("Location: login.php");
    }
?>
<html>
<head>
    <title>Belajar Session</title>
    <style>
        *{
            font-size: 40px;
        }
        h2{
            color: red;
        }
        h1{
            color: green;
        }
    </style>
</head>
<body>
    <h1>HALAMAN UTAMA</h1>
    <h2>Owner - Tampil semua menu</h2>
    <h2>Admin - Tampil Data barang & penjualan</h2>
    <h2>Kasir - Tampil menu penjualan saja</h2>
    <ul>
        <?php
            echo "<h1>Selamat Datang - ".$_SESSION['nama']."</h1>";
            if ($_SESSION['role']=='admin' OR $_SESSION['role']=='owner') {
                echo "<li>Data Barang - admin</li>";
            }
            if ($_SESSION['role']=='kasir' OR $_SESSION['role']=='admin' OR $_SESSION['role']=='owner') {
                echo "<li>Penjualan - kasir</li>";
            }
            if ($_SESSION['role']=='owner') {
                echo "<li>Laporan - owner</li>";
            }
        ?>
    </ul>
    <a href="logout.php">Log Out</a>
</body>
</html>