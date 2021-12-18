<?php

//Task 1.17

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
        getNOD($N, $M);
    }
}else{
    echo 'Введите числа, отличные от нуля';
}

function getNOD($n, $m)
{
    $x = $n;
    $y = $m;
    if($n<$m){
        $x = $m;
        $y = $n;
    }
    for($i=$x; $i>=1; $i--){
        if(($x%$i==0) && ($y%$i==0)){
            echo 'НОД ваших чисел: ' . $i . '</br>';
            break;
        }
    }
}