<?php
$belanja = []; // Array kosong untuk daftar belanja

while (true) {
    echo "\n--- Daftar Belanja ---\n";
    echo "1. Tambah Barang\n";
    echo "2. Hapus Barang\n";
    echo "3. Tampilkan Daftar\n";
    echo "4. Keluar\n";
    echo "Pilih menu: ";
    $pilihan = trim(fgets(STDIN));

    if ($pilihan == 1) {
        echo "Masukkan nama barang: ";
        $barang = trim(fgets(STDIN));
        $belanja[] = $barang;
        echo "$barang telah ditambahkan ke daftar belanja.\n";
    } elseif ($pilihan == 2) {
        echo "Masukkan indeks barang yang ingin dihapus (0-" . (count($belanja) - 1) . "): ";
        $indeks = trim(fgets(STDIN));
        if (isset($belanja[$indeks])) {
            echo $belanja[$indeks] . " telah dihapus.\n";
            unset($belanja[$indeks]);
            $belanja = array_values($belanja); // Susun ulang indeks
        } else {
            echo "Indeks tidak valid.\n";
        }
    } elseif ($pilihan == 3) {
        echo "\nDaftar Belanja:\n";
        foreach ($belanja as $key => $barang) {
            echo "$key. $barang\n";
        }
    } elseif ($pilihan == 4) {
        echo "Keluar dari program.\n";
        break;
    } else {
        echo "Pilihan tidak valid.\n";
    }
}
?>