<?php
$siswa = [
    [

    "nama" => "muhamad ramdani",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.mekarsari",
    "gambar" => "1.jpg"
],
[
    "nama" => "tio aditia",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.tanjakan lengka",
    "gambar" => "2.jpg"
],
[
    "nama" => "zaim gasan",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.pasar sabtu",
    "gambar" => "3.jpg"
],
[
    "nama" => "nugroho suryo ananto",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.panyindangan",
    "gambar" => "4.jpg"
],
[
    "nama" => "Asep riansyah",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.cioray",
    "gambar" => "5.jpg"
],
[
    "nama" => "irmansyah",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.warung asem",
    "gambar" => "6.jpg"
],
[
    "nama" => "faial",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.warung asem",
    "gambar" => "7.jpg"
],
[
    "nama" => "ripal hardiansyah",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.bojong loa",
    "gambar" => "8.jpg"
],
[
    "nama" => "restu agung wildani",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.cikate",
    "gambar" => "9.jpg"
],
[
    "nama" => "muhammad rival valahudin",
    "kelas" => "12 RPL",
    "jurusan" => "Rekayasa perangkat lunak",
    "alamat" => "kp.warung asem",
    "gambar" => "10.jpg"
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1>Data Siswa</h1>
    <?php foreach( $siswa as $sis) : ?>
    <ul>
    <li>
        <img src="img/<?= $sis["gambar"]; ?>" alt="">
         </li>
        <li>nama : <?= $sis["nama"]; ?> </li>
        <li>kelas : <?= $sis["kelas"]; ?> </li>
        <li>jurusan : <?= $sis["jurusan"]; ?> </li>
        <li>alamat : <?= $sis["alamat"]; ?> </li>
    </ul>
    <?php endforeach; ?>
</body>
</html>