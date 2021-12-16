<?php

//Task 1.4
for($i=1000; $i<=9999; $i+=2){
    echo getIncrease($i, true);
}

function getIncrease($i, $x)
{
    
    $increase = true;
    for($j=$i; $j>=10; $j/=10){
        $j = floor($j);
        if($j%10<=floor(($j%100)/10)){
            $increase = false;
            break;
        }
    }
    if($increase){
        return $i . ' - возрастающая последовательность</br>';
    }
}





