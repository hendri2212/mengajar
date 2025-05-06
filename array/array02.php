<?php
// Array multidimensi
$siswa = [
    [
        "nama" => "Budi",
        "kelas" => "XI RPL",
        "umur" => 16
    ],
    [
        "nama" => "Siti",
        "kelas" => "XI RPL",
        "umur" => 17
    ],
    [
        "nama" => "Rina",
        "kelas" => "XI RPL",
        "umur" => 16
    ]
];

// Menambahkan siswa baru
$siswa[] = [
    "nama" => "Rudi",
    "kelas" => "X RPL",
    "umur" => 15
];

// Output array
print_r($siswa[0]);
?>