<?php
//array
//variabel yang dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data berbeda
//pasangan antara key dan value
//key nya adlah index yangdi mulai dari 0


//membuat array
//cara lama
$hari = array("senin", "salasa", "rabu");
//cara baru
$bulan = ["januari", "februari", "maret"];
//bisa memasukan berbagai tie data
$coba = ["sttring", 123, false];

//menampilkan array
//var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

//menampilkan 1 elemen pada array
// echo $hari[0];
// echo "<br>";
// echo $bulan[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jum'at";
echo "<br>";
var_dump($hari);

?>