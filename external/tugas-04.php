<?php
    echo "Nilai Anda : ";

    $handle = fopen("php://stdin", "r");

    $command = trim(fgets($handle));
    if ($command<75) {
        $result = "Nilai $command Tidak Tuntas";
    } else {
        $result = "Nilai $command Tuntas";
    }

    // Close the handle
    fclose($handle);

    // Display the output of the command
    echo "-------------------------\n";
    echo "Nama saya : Hendri Arifin\n";
    echo $result . "\n\n";
?>