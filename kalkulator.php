<?php

$bil1 = 25;
$bil2 = 9;
echo "Bilangan 1 = ".$bil1;
echo "<br>";
echo "Bilangan 2 = ".$bil2;
echo "<br><br>Berikut merupakan hasil dari setiap operasi <br><br>";

function penjumlahan($bil1,$bil2){
    $hasil = $bil1 + $bil2;
    echo "PENJUMLAHAN <br>
    Operator : + <br>";
    echo "Hasil = ".$hasil;
    echo "<br><br>";
}

function pengurangan($bil1,$bil2){
    $hasil = $bil1 - $bil2;
    echo "PENGURANGAN <br>
    Operator : - <br>";
    echo "Hasil = ".$hasil;
    echo "<br><br>";
}

function perkalian($bil1,$bil2){
    $hasil = $bil1 * $bil2;
    echo "PERKALIAN <br>
    Operator : * <br>";
    echo "Hasil = ".$hasil;
    echo "<br><br>";
}

function pembagian($bil1,$bil2){
    $hasil = $bil1 / $bil2;
    echo "PEMBAGIAN <br>
    Operator : / <br>";
    echo "Hasil = ".$hasil;
    echo "<br><br>";
}

function modulus($bil1,$bil2){
    $hasil = $bil1 % $bil2;
    echo "MODULUS <br>
    Operator : % <br>";
    echo "Hasil = ".$hasil;
    echo "<br><br>";
}
penjumlahan($bil1,$bil2);
pengurangan($bil1,$bil2);
perkalian($bil1,$bil2);
pembagian($bil1,$bil2);
modulus($bil1,$bil2);

?>