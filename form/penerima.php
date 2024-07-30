<?php
    echo "Nama Lengkap = " . $_POST['nama'] . "<br>";
    echo "Jenis Kelamin = " . $_POST['jenis'] . "<br>";
    echo "Agama = " . $_POST['agama'] . "<br>";
    echo "Hobi = ";
    $hobi = "";
    foreach ($_POST['hobi'] as $key => $value) {
        echo $hobi . $value;
        $hobi = ", ";
    }

    $dirUpload = "gambar/";
    $namaFile = $_FILES['file']['name'];
    // $ukuranFile = $_FILES['file']['size'];
    // $tipeFile = $_FILES['file']['type'];
    // $date = date("YmdHis") . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $temporary = $_FILES['file']['tmp_name'];
    $terupload = move_uploaded_file($temporary, $dirUpload . $namaFile);
?>
<!--
    1. Rename file use datetime format
    2. Only type jpg, jpeg, png / validation in frontend and backend
    3. Max size 1MB
    4. Convert 2 size version original and 200x200 => create 2 folder: gambar_original and gambar_thumbnail
-->