<?php

//Task 1.13

$N = 1323;
$NCount = ceil(log10($N));
if($NCount%2==0){
    if(isSymmetric($N, $NCount)){
        echo $N . ' является симмеричным';
    }else{
        echo $N . ' не является симмеричным';
    }
}else{
    echo 'Количество цифр в числе ' .$N. ' нечетное';
}

function isSymmetric($n, $count)
{
    $devider = 10 ** ($count/2);
    if($n%$devider == floor($n/$devider)){
        return true;
    }else{
        return false;
    }
}