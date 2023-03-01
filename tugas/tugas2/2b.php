<?php 

$baris = 10;

for ( $i = 1; $i <= $baris ; $i ++) {
    for ($kolom = 1; $kolom <= $i; $kolom ++) {
        echo " $kolom";
    }
    echo "<br>";
}
?>