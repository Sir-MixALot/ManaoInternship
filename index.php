<?php

//Task 1.8
$notEqual = true;
for($i=1002; $i<=1002; $i++){
    echo $i . '</br>';
    for($j = $i; $j>10; floor($j/=10)){
        echo $i%10 . '/' . floor(($j%100)/10) . '</br>';
        if($i%10 != floor(($j%100)/10)){
            $notEqual = true;
        }else{
            break;
        }
    }
    if(!$notEqual){
        break;
    }
    if($notEqual){
        echo $i . 'Число содержит две одинаковые цифры';
    }else{
        echo 'Число не содержит одинаковых цифр';
    }

}


