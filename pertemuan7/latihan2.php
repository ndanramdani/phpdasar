<?php
//cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) || 
 !isset($_GET["kelas"]) ||
 !isset($_GET["jurusan"]) ||
 !isset($_GET["alamat"]) ||
 !isset($_GET["gambar"])) {
    //redirect
    header("Location: latihan1.php");
    exit;
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data sisa</title>
</head>
<body>
    <ul>
       <li> <img src="<?= $_GET["gambar"]; ?>" alt="image"></li>
        <li><?php echo $_GET["nama"]; ?></li>
        <li><?php echo $_GET["kelas"]; ?></li>
        <li><?php echo $_GET["jurusan"]; ?></li>
        <li><?php echo $_GET["alamat"]; ?></li>
    </ul>

    <a href="latihan1.php">kembali ke daftar siswa</a>
</body>
</html>