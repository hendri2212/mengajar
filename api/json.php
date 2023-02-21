<?php
    $url    = 'https://smkn1kotabaru.sch.id/api/data_siswa';
    $data   = file_get_contents($url);
    $siswas = json_decode($data);

    echo $siswas[0]->full_name;
    // echo '<select name="" id="">';
    //     foreach($siswas as $siswa){
    //     echo '<option>';
    //         echo $siswa->full_name.'<br>';
    //     echo '</option>';
    //     }
    // echo '</select>';
?>