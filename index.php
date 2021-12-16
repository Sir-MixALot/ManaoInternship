<?php

//Task 1.4
for($i=1000; $i<=9999; $i+=2){
    echo getIncrease($i, true);
    echo getIncrease($i, false);
}

function getIncrease($i, $moreLess)
{


    for($j=$i; $j>=10; floor($j/=10)){
        if($moreLess){
            $increase = true;
            if($j%10<=floor(($j%100)/10)){
                $increase = false;
                break;
            }
        }else if(!$moreLess){
            $decrease = true;
            if($j%10>=floor(($j%100)/10)){
                $decrease = false;
                break;
            }
        }
    }
    if($increase){
        return $i . 'возрастающая</br>';
    }else if($decrease){
        return $i . 'убывающая</br>';
    }

}





