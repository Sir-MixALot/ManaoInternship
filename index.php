<?php

$n = 37;
if($n>36){
    echo "Нет 4-значного числа, сумма цифр которого будет равна " . $n;
}
for($i=1000; $i<=9999; $i++){
    $first = floor($i/1000);
    $sec = floor(($i%1000)/100);
    $third = floor(($i%100)/10);
    $fourth = $i%10;
    $sum = $first+$sec+$third+$fourth;
    if($sum == $n){
        echo $i . "</br>";
    }
}