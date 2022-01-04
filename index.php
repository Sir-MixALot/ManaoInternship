<?php

//Task 2.2

$A = [1,2,3,4];
$B=[];
echo 'Входной массив: ';
echo '<pre>' . print_r($A, true) . '</pre>';
for($i=0;$i<=count($A)-1;$i++){
    $count=0;
    $n =0;
    for($j=0;$j<=$i;$j++){
        $n+=$A[$j];
        $count++;
    }
    $B[]=$n/$count;
}
echo 'Выходной массив: ';
echo '<pre>' . print_r($B, true) . '</pre>';
