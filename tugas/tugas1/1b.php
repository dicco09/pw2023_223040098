<?php
$x = 98; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Aku adalah angka <b><?php echo $x ?></b> <br>
        Jika aku dikali 5, maka aku sekarang menjadi <b><?php echo $x*5 ?></b> <br>
        Jika aku dibagi 2, maka aku sekarang menjadi <b><?php echo $x=$x*5/2 ?></b> <br>        
        Jika aku ditambah 75, maka aku sekarang menjadi <b><?php echo $x =$x+75 ?></b> <br>
        Jika aku dikurang 20, maka aku sekarang menjadi <b><?php echo $x =$x-20 ?></b>

    </p>
</body>
</html>