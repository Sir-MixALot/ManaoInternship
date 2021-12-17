<?php

//Task 1.9

$N = 5;
echo $N . " - ваше число</br>";
$NCount  = ceil(log10($N));
$square =  $N**2;
echo $square . " - квадрат вашего числа</br>";
if($square%(10**$NCount) == $N){
    echo 'Число является автоморфным';
}else{
    echo 'Число не является автоморфным';
}

