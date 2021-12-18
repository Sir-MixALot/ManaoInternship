<?php

//Task 1.15

$N = -15;
echo $N . ' ваше число</br>';
if(gettype($N) == "double"){
    echo 'Введите целое число';
}else if($N<>0){
    getDeviders($N);
}else{
    echo 'Введите число, отличное от нуля';
}

function getDeviders($n)
{
    $m=1;
    if($n<0){
        $m = -1;
    }
    for ($i = 1; $i <= abs($n); $i++)
    {
        if ($n % $i == 0)
        {
            echo ($i*$m) . ' / ';
        }
    }
}