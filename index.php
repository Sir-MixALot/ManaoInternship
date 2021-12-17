<?php

//Task 1.8
$notEqual = true;
for($y=1000; $y<=9999; $y++){
    $equal = false;
    for($i = $y; $i>10; floor($i/=10)){

        for($j = $i; $j>10; floor($j/=10)){
            if($i%10 != floor(($j%100)/10)){
                $equal = false;
            }else{
                $equal = true;
                break;
            }
        }
        if($equal){
            break;
        }
    }
    if(!$equal){
        echo $y . '</br>';
    }

}


