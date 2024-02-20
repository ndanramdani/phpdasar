<?php
$siswa = [
    ["muhamad ramdani", "02198331", "rekayasa perangkat lunak", "ndanramdani@gmail.com"],
    ["tio aditya", "039479397", "rekayasa perangkat lunak", "tioadtia@gmail.com"],
    ["zaim gasan", "089083682", "rekayasa perangkat lunak", "zaimgassan@gmail.com"],
    ["nugroho suryo ananto", "089083682", "rekayasa perangkat lunak", "kokogoho@gmail.com"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba array</title>
</head>
<body>
    <?php foreach($siswa as $sis) : ?>
        
        <ul>
            <li>Nama : <?= $sis [0]; ?></li>
            <li>Nip : <?= $sis [1]; ?></li>
            <li>Jurusan : <?= $sis [2]; ?></li>
            <li>Email : <?= $sis [3]; ?></li>
        </ul>
        <?php endforeach ?>
</body>
</html>