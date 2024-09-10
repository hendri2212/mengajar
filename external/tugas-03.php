<?php
    echo "Saya lahir pada tahun : ";

    $handle = fopen("php://stdin", "r");

    $command = trim(fgets($handle));
    $result = 2024 - $command;

    // Close the handle
    fclose($handle);

    // Display the output of the command
    echo "Nama saya : Hendri Arifin\n";
    echo "Umur saya sekarang: " . $result . " Tahun";
?>