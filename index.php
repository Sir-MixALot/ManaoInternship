<?php

//Task 2.3

$A = [8,4,-9,6,6,-1,7];
echo 'Входяший массив';
echo '<pre>' . print_r($A, true) . '</pre>';
$pos = 0;
$el = 0;
for($i=0;$i<=count($A)-1;$i++){
    if($A[$i]>=0){
        $pos = $i;
        $el = $A[$i];
        break;
    }
}

for($j=count($A)-1;$j>=0;$j--){
    if($A[$j]<0){
        $neg = $A[$j];
        $A[$j] = $el;
        $A[$pos] = $neg;
        break;
    }
}
echo 'Выходяший массив';
echo '<pre>' . print_r($A, true) . '</pre>';