<?php

//Task 1.27

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
                if(isSimple($y)){
                    $sum += $y;
                }
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
function isSimple($n)
{
    $simple = true;
    $SquareRoot = floor(sqrt($n));
    for ($i = 2; $i <= $SquareRoot; $i++)
    {
        if ($n % $i == 0)
        {
            $simple = False;
            break;
        }
    }
    return $simple;
}