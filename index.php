<?php

//Task 1.17

$N = 10;
$M = 15;
echo $N . ' ваше первое число</br>';
echo $M . ' ваше второе число</br>';
if(gettype($N) == "double" || gettype($M) == "double"){
    echo 'Введите целые числа';
}else if($N<>0 && $M<>0){
    if($N<0 || $M<0){
        echo 'Введите положительные числа';
    }else if ($N>=$M){
        echo 'Первое число должно быть меньше второго';
    }else{
        getNOD($N, $M);
    }
}else{
    echo 'Введите числа, отличные от нуля';
}

function getNOD($n, $m)
{
    for($i=$n; $i>=1; $i--){
        if(($n%$i==0) && ($m%$i==0)){
            echo 'НОД ваших чисел: ' . $i . '</br>';
            break;
        }
    }
}