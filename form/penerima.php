<?php
    include "resize.php";

    echo "Nama Lengkap  = " . $_POST['nama'] . "<br>";
    echo "Jenis Kelamin = " . $_POST['jenis'] . "<br>";
    echo "Agama         = " . $_POST['agama'] . "<br>";
    echo "Hobi          = ";
    $hobi = "";
    foreach ($_POST['hobi'] as $key => $value) {
        echo $hobi . $value;
        $hobi = ", ";
    }

    $dirOriginal    = 'assets/original_image/';
    $dirThumbnail   = 'assets/thumbnail_image/';

    $filename       = date("YmdHis") . '.' . pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $temporary      = $_FILES['file']['tmp_name'];
    $fileSize       = filesize($temporary)/1024/1024;

    $src_image      = imagecreatefromjpeg($temporary);
    $src_width      = imageSX($src_image);
    $src_height     = imageSY($src_image);

    $width          = 200;
    $height         = ($width / $src_width) * $src_height;

    if (exif_imagetype($temporary) !== false && $fileSize < 1) {
        move_uploaded_file($temporary, $dirOriginal . $filename);
        
        resize($dirOriginal . $filename, $dirThumbnail, $filename, $width, $height);
    } else { ?>
        <script>
            alert("Type data file salah atau ukuran file lebih 1Mb")
            window.location = "index.php";
        </script>
    <?php  } ?>
<!--
    1. Rename file use datetime format
    2. Only type jpg, jpeg, png / validation in frontend and backend => alert + redirect ke index
    3. Max size 1MB => validation frontend and backend
    4. Convert 2 size version original and thumbnail => create 2 folder: asset/original_image and asset/thumbnail_image
-->