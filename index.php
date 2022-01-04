<?php

//Task 2.6

$A = [1,4,5,7,8,8,9,3];
echo 'Входящий массив';
echo '<pre>' . print_r($A, true) . '</pre>';
$max = 0;
for($i=0;$i<=count($A)-1;$i++){
    if($A[$i]>=$max && $A[$i]%2==0){
        $max = $A[$i];
    }
}

for($i=0;$i<=count($A)-1;$i++){
    if($A[$i]==$max){
        $A[$i] = $i;
    }
}
echo 'Выходящий массив';
echo '<pre>' . print_r($A, true) . '</pre>';
