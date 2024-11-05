<?php
    $handle = fopen("php://stdin", "r");

    $username = "root";
    $password = "root";


    echo "Username : ";
    $inputUsername = trim(fgets($handle));
    
    echo "Password : ";
    $InputPassword = trim(fgets($handle));

    if($username == $inputUsername && $password == $InputPassword) {
        echo $result = "Login Berhasil\n\n";
    } else {
        echo $result = "Login Gagal\n\n";
    }
    // Close the handle
    fclose($handle);

    // Display the output of the command
    // echo "-------------------------\n";
    // echo "Nama saya : Hendri Arifin\n";
    // echo $result . "\n\n";
?>