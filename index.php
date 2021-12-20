<?php

//Task 1.21

$N = 13;
$M = 21;
echo $N . ' ваше первое число</br>';
echo $M . ' ваше второе число</br>';
if(abs($N)!=$N || abs($M)!=$M){
    echo 'Введите положительные числа';
}else{
    $min = min($N, $M);
    $max = max($N, $M);
    checkCoprimeNumbers(abs($min), abs($max));
}

function checkCoprimeNumbers($n, $m)
{
    $coprime = true;
    for($i=$n; $i>=2; $i--){
        if($n%$i==0){
            if($m%$i==0){
                $coprime = false;
                echo 'Числа не взаимно простые';
                break;
            }
        }
    }
    if($coprime){
        echo 'Числа взаимно простые';
    }
}