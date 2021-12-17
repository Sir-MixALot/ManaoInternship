<?php

//Task 1.11

$m = 20;
$n = 10;
if(floor($n/10)==0){
    echo "Введите число больше одной цифры";
}else{
    for($i=$n; $m>0;  $i++){
        $m--;
        $sum = 0;
        for($j=$i; $j>0; floor($j/=10)){
            $sum += $j%10;
        }
        if($i%$sum==0){
            echo $i . '</br>';
        }
    }
}