<?php

//Task 1.6

for($i=1000; $i<=9999; $i++){
    $correct = true;
    for($j=$i; $j>=1; floor($j/=10)){

        switch ($j%10){
            case 0:
            case 2:
            case 3:
            case 7:
                break;
            default:
                $correct = false;
                break;
        }
    }
    if($correct){
        echo $i . '</br>';
    }
}

