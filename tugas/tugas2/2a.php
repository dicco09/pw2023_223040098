<?php

$nd= "Meutuah";
$nb = "Dicco";

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0 ) {
        echo "$nd $nb <br>";
    } elseif ($i % 3 == 0 ) {
        echo "$nd <br> ";
    } elseif ($i % 5 == 0 ) {
        echo " $nb <br> ";
    } else {
        echo "$i <br> ";
    }
}
?>