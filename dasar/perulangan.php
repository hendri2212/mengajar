<h1>Perulangan ( Looping )</h1>
<br>
<?php
    for($i=0; $i<10; $i++){
        echo "Silahkan baca nama barang di excel ".$i;
        echo "<br>";
    }
?>
Definisi Looping
    Dalam bahasa pemrograman tersedia suatu fasilitas yang digunakan untuk
melakukan proses yang berulang-ulang sebanyak diinginkan. Misalnya, bila
ingin mengimput dan mencetak bilangan dari 1 sampai 100 bahkan 1000, tentunya
akan merasa kesulitan dan memakan waktu yang lama. Namun dengan struktur
perulangan proses tidak perlu menuliskan perintah sampai 100 atau 1000 kali
cukup dengan beberapa perintah saja.

Perulangan ( looping ) dengan for
    Struktur perulangan for biasa digunakan untuk mengulang suatu proses yang
telah diketahui jumlah perulangannya. Dari segi penulisannya struktur
perulangan for tampaknya lebih efisien karena bentuknya lebih sedernaha

Bentuk umum perulangan for sebagai berikut:
    for( inisialisasi; syarat; step ){
        pernyataan;
    }
-------------------------------------
Perulangan ( looping ) dengan while
    Perulangan while banyak digunakan pada program yang terstruktur.
Perulangan ini banyak digunakan bila jumlah perulangannya belum diketahui.
Proses perulangan akan terus berlanjut selama kondisinya bernilai benar (true)
dan akan berhenti bila kondisinya bernilai salah (false).

Bentuk umum perulanga while yaitu:
    while (kondisi) {
        aksi -- jika kondisi bernilai true ( terpenuhi )
    }