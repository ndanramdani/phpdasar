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
]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data siwa</title>
</head>
<body>

<h1>Daftar Siswa</h1>

<ul>  
    <?php foreach($siswa as $sis) : ?>
        <a href="latihan2.php?nama=<?= $sis["nama"];?>&kelas=<?=$sis["kelas"]; ?>&jurusan=<?=$sis["jurusan"];?>&alamat=<?=$sis["alamat"];?>&gambar=<?=$sis["gambar"];?>"><li><?= $sis["nama"]; ?></li></a>
        <?php endforeach; ?>
    </ul>
</body>
</html>