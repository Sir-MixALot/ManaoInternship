<?php

//Task 1.25

$n = 1;
$m = 50000;
echo $n.' - стартовое число</br>';
echo $m.' - количество чисел</br>';
$sum = 0;
$count = 0;
for($i=$n; $m>0;  $i++){
    $m--;
    $factorialSum = 0;
    for($j = $i; $j>0;$j=floor($j/10)){
        $factorialSum += factorial($j%10);
    }
    if($i == $factorialSum){
        $sum+=$i;
        $count++;
        echo $i .'-'. $factorialSum . '</br>';
    }

}
echo 'Количество чисел: ' . $count . '. Сумма чисел: ' . $sum;

function factorial($n)
{
    if ($n <= 1) return 1;
    return $n * factorial($n - 1); // здесь происходит повторный вызов функции
}
