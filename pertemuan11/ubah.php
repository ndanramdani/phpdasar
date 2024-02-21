<?php
require 'function.php';

//ambil data di url
$id = $_GET["id"];


//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

//cek apakah tombol submit sudah di tekan apa belum
if(isset($_POST["submit"])) {
   
    

  

    //cek apkah data berhasil di ubah atau tidak
    if( ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah');
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
    <title>ubah data mahasiswa</title>
</head>
<body>
    <h1>ubah data mahasiswa</h1>

    <form action="" method="post">
        <ul>
        <input type="hidden"  name="id" value="<?= $mhs["id"]; ?> ">
            <label for="nrp">NRP : </label>
            <li><input type="text" name="nrp" id="nrp" required value="<?= $mhs["nrp"]; ?>">
        </li>
            <label for="nama">Nama : </label>
            <li><input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
        </li>
            <label for="email">Email : </label>
            <li><input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
        </li>
            <label for="jurusan">Jurusan : </label>
            <li><input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
        </li>
            <label for="gambar">Gambar : </label>
            <li><input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"]; ?>">
        </li>
        <li>
            <button type="submit" name="submit">ubah Data!</button>
        </li>

        </ul>
    </form>
</body>
</html>

