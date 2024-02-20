<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;;
            background-color: green;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;

        }
        .clear {
            clear: both;
        }
    </style>
    
</head>
<body>
    <?php
       $angka = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
];   
    ?>
    <?php foreach($angka as $no) : ?>
        <?php foreach($no as $id) : ?>
    <div class="kotak"><?php echo $id; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>