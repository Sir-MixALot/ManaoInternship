<?php

//Task 1.20

$N = 12;
$M = 21;
echo $N . ' ваше первое число</br>';
echo $M . ' ваше второе число</br>';
$min = min($N, $M);
$max = max($N, $M);

getDevidersSum($min, $max);

function getDevidersSum($n, $m)
{
    $maxSum = 0;

    for($i=$n; $i<=$m;$i++){
        $sum = 0;
        for($y = 1; $y <= $i; $y++){
            if ($i % $y == 0)
            {
                $sum += $y;
            }
        }
        if($sum>$maxSum){
            $maxSum = $sum;
        }
        echo $i . '(' . $sum . ') /';
    }
    getNumberWithMaxSum($n, $m, $maxSum);
}

function getNumberWithMaxSum($n, $m, $ms)
{
    for($i=$n; $i<=$m;$i++){
        $sum = 0;
        for($y = 1; $y <= $i; $y++){
            if ($i % $y == 0)
            {
                $sum += $y;
            }
        }
        if($sum == $ms){
            echo '</br>'. $i .  '(max sum: ' . $sum . ') /';
        }
    }
}