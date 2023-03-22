<?php

$daftarfilm = 
[['Koala Kumal','Ernest Prakasa, Jessica Mila', 'Raditya Dika'],
 ['Zuhdi', '🐕', '🍚'],
  ['Dzikri', '🐄', '🍛'],
   ['Caca', '🐖', '🥪'],
    ['Kaka', '🐍', '🌭']];

$poster
$judul = ['Koala Kumal', 'Pengabdi Setan 2', 'Ngeri Ngeri Sedap', 'Bohemian Rhapsody', 'Top Gun Maverick',];
$tahun = ['2016', '2022', '2022', '2019', '2022'];
$pemeranutama = ['Ernest Prakasa, Jessica Mila']
$sutradara = ['Raditya Dika', 'Joko Anwar', 'Bene Dion', 'Bryan Singer', 'Joseph Konsinski'];
$genre = ['Drama, Comedy', 'Horror, Thriller', 'Drama, Comedy', 'Biography, Drama, Music', 'Action, Adventure'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
</head>
<body>

<h2>Daftar Mahasiswa</h2>
<?php foreach($mahasiswa as $mhs) {?>
<ul>
    <li>Nama: <?= $mhs[0] ; ?></li>
    <li>Makanan Favorit:  <?= $mhs[1] ; ?> </li>
    <li>Binatang Peliharaan :  <?= $mhs[2] ; ?></li>
</ul>
    <?php } ?>
</body> 
</html>