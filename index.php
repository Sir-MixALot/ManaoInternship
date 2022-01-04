<?php

//Task 2.5

$A=[4,5,9,1,3,6,7];
echo 'Входной массив';
echo '<pre>' . print_r($A, true) . '</pre>';
$min = $A[0];
$min_pos=0;
$max = 0;
$max_pos=0;
for($i=1;$i<=count($A)-1;$i++){
    if($A[$i]<$min){
        $min = $A[$i];
        $min_pos = $i;
    }else if($A[$i]>$min && $A[$i]>$max){
        $max = $A[$i];
        $max_pos = $i;
    }
}
$A[$min_pos] = $max;
$A[$max_pos] = $min;
echo 'Выходной массив';
echo '<pre>' . print_r($A, true) . '</pre>';