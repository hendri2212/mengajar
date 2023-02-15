<?php
    $conn   = new mysqli('localhost', 'root', '');
    $db     = mysqli_select_db($conn, 'pengaduan');
    if ($db) {
        echo "Koneksi berhasil";
    } else {
        echo "Koneksi gagal";
    }
?>