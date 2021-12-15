<?php

//Task 1.1

$x = 5;
$N = 5455;
$count = 0;
echo 'Ваше число: ' .$N. '</br>';

function getCount($x, $N, $count)
{
    if($N%10 == $x){
        $count+=1;
    }
    if($N/10>1){
        return getCount($x, floor($N/10), $count);
    }
    echo 'Количество цифр, равных'.$x.': ' . $count;
}
echo getCount($x, $N, $count);

//

