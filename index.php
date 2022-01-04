<?php

//Task 2,4

$A=[1,2,3,5,6,8,8,7,7,4,4,4];
echo '<pre>' . print_r($A, true) . '</pre>';
$count =0;
for($i=0;$i<=count($A)-1;$i++){
    if($A[$i]==$A[$i+1]){
        $count++;
    }
}
echo $count;