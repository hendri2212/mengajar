<?php
// Array asosiatif
$siswa = [
    "Budi" => "Kelas XI RPL",
    "Siti" => "Kelas XI RPL",
    "Rina" => "Kelas XI RPL"
];

// Menambahkan siswa baru
$siswa["Rudi"] = "Kelas X RPL";

// Mendapatkan kunci pertama (index 0)
$keys = array_keys($siswa);
$firstKey = $keys[0];

// Mendapatkan nilai pertama (index 0)
$values = array_values($siswa);
$firstValue = $values[0];

// Menampilkan hasil
echo "Kunci pertama: $firstKey\n";
echo "Nilai pertama: $firstValue\n";

// Menampilkan semua elemen array
foreach ($siswa as $key => $value) {
    echo "Nama: $key, Kelas: $value\n";
}
?>