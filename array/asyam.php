<?php
$siswa =
    [
        [
            "Nama" => "Dika",
            "Kelas"  => "XI",
            "Jurusan"  => "RPL"
        ],
        "Deny",
        "Fathir",
        "Ryan",
        "Levie"
    ];
    // ["Nama" => "Dika", "Kelas"  => "XI", "Jurusan"  => "RPL"]];//, "Deny", "Fathir", "Ryan", "Levie"];
// unset($siswa[4]);
// array_push($siswa, "Rahman", "Bintang");
// $siswa2 = ["Bagus", "Awal"];
// echo "Salah satu siswa di kelas XI RPL adalah ", $siswa[4], "\n\n";
// foreach ($siswa as $satu) {
//     echo $satu, "\n";
// }
// foreach ($siswa2 as $dua) {
//     echo $dua, "\n\n";
// }

// foreach ($dika as $murid) {
//     echo $murid;
// }
// echo "Nama: " . $siswa[0]["Nama"] . "\n";
// echo "Kelas: " . $siswa[0]["Kelas"] . "\n";
// echo "Jurusan: " . $siswa[0]["Jurusan"] . "\n\n";

// $semua_siswa = array_merge($siswa, $siswa2);
// echo $semua_siswa;

// echo $siswa[0]['Nama'];
// echo $siswa[1];
// foreach($siswa AS $data){
//     echo $data;
// }
// echo "\nJumlah keseluruhan siswa: " . count($semua_siswa);

// // Menampilkan elemen pertama (array asosiatif)
// echo "Nama: " . $siswa[0]["Nama"] . "\n";
// echo "Kelas: " . $siswa[0]["Kelas"] . "\n";
// echo "Jurusan: " . $siswa[0]["Jurusan"] . "\n\n";

// // Menampilkan elemen lainnya (string)
// echo "Data lainnya:<br>";
for ($i = 1; $i < count($siswa); $i++) {
    echo $siswa[$i] . "\n";
}

// foreach ($siswa as $key => $value) {
//     if (is_array($value)) {
//         // echo "Data Array ke-$key: \n";
//         foreach ($value as $k => $v) {
//             echo "$k: $v \n";
//         }
//         echo "\n";
//     } else {
//         // echo "Data ke-$key: $value \n";
//         echo "$value \n";
//     }
// }

var_dump($siswa);