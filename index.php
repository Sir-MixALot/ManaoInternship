<?php

//Task 1.19

$N = 11;
$M = 13;
echo $N . ' ваше первое число</br>';
echo $M . ' ваше второе число</br>';
if(gettype($N) == "double" || gettype($M) == "double"){
    echo 'Введите целые числа';
}else if($N<>0 && $M<>0){
    if($N<0 || $M<0){
        echo 'Введите положительные числа';
    }else{
        getNOK($N, $M);
    }
}else{
    echo 'Введите числа, отличные от нуля';
}

function getNOK($n, $m)
{
    $x = $n;
    $y = $m;
    if($n<$m){
        $x = $m;
        $y = $n;
    }
    $nok = 1;
    for($i = $x;true;$i++){
        if($i%$x==0){
            if($i%$y==0){
                $nok *=$i;
                break;
            }
        }
    }
    echo $nok;
}

