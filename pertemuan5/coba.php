<?php
$coba = ["ndan", "123", "kpmekarsari"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>coba</h1>

    <?php foreach($coba as $c) : ?>
        <?php echo $c; ?>
        <?php endforeach; ?>
</body>
</html>