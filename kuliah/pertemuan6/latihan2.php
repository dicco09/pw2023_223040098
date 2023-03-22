<?php
//Array Associative
//array yang indexnya
$mahasiswa = [
[
'nama' => 'Dicco', 
'binatang' => '🐎', 
'makanan' => '🍔'
],

 [
    'nama' => 'Zuhdi',
     'binatang' => '🐕', 
     'makanan' => ['🍚','🌭']
    ],
  [
    'nama' => 'Dzikri', 
    'binatang' => '🐄', 
    'makanan' => []
],
   [
    'nama' => 'Caca', 
    'binatang' => '🐖', 
    'makanan' => ['🥪','🍔','🌭']
],
    [
        'nama' => 'Kaka', 
        'binatang' => '🐍', 
        'makanan' => ['🌭']
        ]
    ];

$binatang = ['🐎', '🐕', '🐄', '🐖', '🐍'];
$makanan = ['🍔', '🍚', '🍛', '🥪', '🌭'];
$daftarmahasiswa = ['Dicco', 'Zuhdi', 'Dzikri', 'Caca', 'Kaka',]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>

<h2>Daftar Mahasiswa</h2>
<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <li>Nama: <?= $mhs['nama'] ; ?></li>
    <li>Makanan Favorit:  
        <?php foreach ($mhs['makanan'] as $mkn ) ; { 
            echo $mkn;
        } ?> 
            </li>
    <li>Binatang Peliharaan :  <?= $mhs['binatang'] ; ?></li>
</ul>
    <?php } ?>
</body> 
</html>