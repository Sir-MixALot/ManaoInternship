<?php

//Task 1.16

$N = 1;
$M = 10000;
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
        checkPerfect($N, $M);
    }
}else{
    echo 'Введите числа, отличные от нуля';
}

function checkPerfect($n, $m)
{
    for ($i = $n; $i < $m; $i++)
    {
        $half = floor($i/2);
        $sum = 0;
        for($j = 1; $j <= $half; $j++){
            if ($i % $j == 0)
            {
                $sum += $j;
            }
        }
        if($sum == $i){
            echo $i . '/';
        }
    }
}