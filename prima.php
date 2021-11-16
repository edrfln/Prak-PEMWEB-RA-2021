<?php

for($i=1;$i<=50;$i++){
    $hitung = 0;
    for($j=1;$j<=$i;$j++){
        if($i % $j == 0){
            $hitung++;
        }
    }
    if($hitung == 2){
        echo $i." ";
    }
}
?>