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
    $number = 0;
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
            $number = $i;
        }
        echo $i . '(' . $sum . ') /';
    }
    echo '</br>' . $number . '(max sum: ' . $maxSum . ')';
}