<?php 

$luas ='10';
$keliling ='20';

echo "<h4>Menghitung Luas Lingkaran</h4>";
function luaslingkaran($r) {
    $luas = 3.14 * $r * $r;
    return $luas . "cm<sup>2</sup>"; 
}
echo "Jari-jari = $luas cm.</br>";
echo "Luas lingkaran =" . luaslingkaran(10) . "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4>";
function kelilinglingkaran($r) {
    $keliling = 2 * 3.14 * $r;
    return $keliling . "cm";
}
echo "Jari-jari =$keliling cm. </br>";
echo "Luas lingkaran=" . kelilinglingkaran(20) . "<hr>";
?>