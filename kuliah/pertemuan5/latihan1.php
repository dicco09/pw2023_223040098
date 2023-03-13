<?php

//ARRAY
//Membuat array
$hari = array('Senin', 'Selasa', 'Rabu');
$bulan = ['Januari', 'Februari', 'Maret'];
$myArray = ['dicco', '27', false];
$binatang = ['🐕', '🐄', '🐖', '🐎', '🦌'];

//Mencetak array
//mencetak 1 elemen di dalam array menggunakan echo
echo $hari[2];
echo "<hr>";

//mencetak semua isi arra
//var_dump, print_r
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($myArray);
echo "<br>";
print_r($binatang);
echo "<br>";

//memanipulasi array
//menambahkan elemen  menggunakan index
$hari[3] = 'kamis';
print_r($hari);
echo "<hr>";


print_r($hari);
echo "<br>";
//menambahkan elemen di akhir array menggunakan []
$hari[] = "jum'at";
$hari[] = "sabtu";
$hari[] = "minggu";
print_r($hari);
echo "<hr>";



echo "<hr>";

//menambah elemen di akhir array menggunakan array_push
array_push($bulan, 'April', 'Mei', 'Juni');
print_r($bulan);
echo "<br>";

//menambah elemen di awal
array_unshift($binatang, '🐕' );
print_r($binatang);
echo "<hr>";

//menghapus elemen di belakang array menggunakan array_pop
array_pop($hari);
print_r($hari);
echo "<br>";
?>