<?php

//Task 1.19

$N = 65;
$M = 25;
echo $N . ' ваше первое число</br>';
echo $M . ' ваше второе число</br>';
if(gettype($N) == "double" || gettype($M) == "double"){
    echo 'Введите целые числа';
}else if($N<>0 && $M<>0){
    if($N<0 || $M<0){
        echo 'Введите положительные числа';
    }else{
        getNOK($N, $M);
    }
}else{
    echo 'Введите числа, отличные от нуля';
}

function getNOK($n, $m)
{
    $x = $n;
    $y = $m;
    if($n<$m){
        $x = $m;
        $y = $n;
    }
    $nok = 1;

}

function getDeviders($n)
{
    $half = floor($n/2);
    $sum = 0;
    for($j = 1; $j <= $half; $j++){
        if ($n % $j == 0)
        {
            $sum += $j;
        }
    }
    if($sum == $n){
        echo $i . '/';
    }
}