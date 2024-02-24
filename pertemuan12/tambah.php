<?php
require 'function.php';
//koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//cek apakah tombol submit sudah di tekan apa belum
if(isset($_POST["submit"])) {
   
    

  

    //cek apkah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
        </script>
        ";
       
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <label for="nrp">NRP : </label>
            <li><input type="text" name="nrp" id="nrp" required>
        </li>
            <label for="nama">Nama : </label>
            <li><input type="text" name="nama" id="nama" required>
        </li>
            <label for="email">Email : </label>
            <li><input type="text" name="email" id="email" required>
        </li>
            <label for="jurusan">Jurusan : </label>
            <li><input type="text" name="jurusan" id="jurusan" required>
        </li>
            <label for="gambar">Gambar : </label>
            <li><input type="text" name="gambar" id="gambar" required>
        </li>
        <li>
            <button type="submit" name="submit">Tambah Data!</button>
        </li>

        </ul>
    </form>
</body>
</html>