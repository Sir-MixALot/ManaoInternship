<?php

//Task 1.4

for($i=1000; $i<=9999; $i++){
    if($i%2 == 0){
        $first = floor($i/1000);
        $sec = floor(($i%1000)/100);
        $third = floor(($i%100)/10);
        $fourth = $i%10;
        if($first<$sec && $sec<$third && $third<$fourth){
            echo $i . ' - возрастающая последовательность </br>';
        }else if($first>$sec && $sec>$third && $third>$fourth){
            echo $i . ' - убывающая последовательность </br>';
        }
    }
}

