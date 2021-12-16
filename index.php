<?php

//Task 1.1 v2

$x = 5;
$N = 5455;
$count = 0;
echo 'Ваше число: ' .$N. '</br>';

for($i=$N; $i>0; $i=floor($i/=10)){
    if($i%10 == $x){
        $count+=1;
    }
}
echo 'Количество цифр, равных'.$x.': ' . $count;

