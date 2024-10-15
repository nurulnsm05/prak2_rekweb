<?php
function curl($url){
    $ch= curl_init ();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output
}

//alamat localhost untuk file getwisata.php ambil hasil export Json
$send = curl("http://localhost/Prak2_RekWeb/getwisata.php");

//mengubah json menjadi array
$data = json_decode($send, TRUE);

foreach ($data as $row){
    echo $row["id.wisata"]."<br/>";
    echo $row["kota"]."<br/>";
    echo $row["landmark"]."<br/>";
    echo $row["tarif"]."<br/>";
}
?>