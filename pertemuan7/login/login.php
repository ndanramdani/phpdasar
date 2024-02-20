<?php
//cek apakah tombbol submit sudah di tekan apa belum
if(isset($_POST["submit"])) {
//cek username dan password
if( $_POST["nama"] == "ramdani" && $_POST["pw"] == "111" ) {
//jika benar, reddirect ke halaman admin
header("Location: admin.php");
exit;
} 
else {
//jika salah, tampilkan pesan kesalahan
$error = true;
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username/password salah!</p>
    <?php endif; ?>

    <ul>
        <form action="admin.php" method="post">
            <li>
                <label for="nama">username :</label>
            <input type="text" name="nama" id="nama">
        </li>
            <li>
                <label for="password">password :</label>
            <input type="password" name="pw" id="password">
        </li>
        <li>
            <button type="submit" name="submit">login</button>
        </li>
        </form>
    </ul>
</body>
</html>