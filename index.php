<?php

//Task 1.18

$N = 220;
$M = 6000;
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
        checkFriendlyNumbers($N, $M);
        }
}else{
    echo 'Введите числа, отличные от нуля';
}

function checkFriendlyNumbers($n, $m)
{
    for($i=$n; $i<$m; $i+=60){
        for($j=$i+1; $j<$m; $j++){
            if(getDeviders($i)==$j){
                if(getDeviders($j)==$i){
                    echo $i . '+' . $j . '</br>';
                }
            }
        }
    }
}

function getDeviders($x)
{
        $half = floor($x/2);
        $sum = 0;
        for($y = 1; $y <= $half; $y++){
            if ($x % $y == 0)
            {
                $sum += $y;
            }
        }
        return $sum;

}