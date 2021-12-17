<?php

//Task 1.7

$N = 3173;
echo 'Ваше число: ' .$N. '</br>';
if(floor($N/10)==0){
    echo "Введите число больше одной цифры";
}else{
    $equal = false;
    for($i = $N; $i>10; floor($i/=10)){

        for($j = $i; $j>10; floor($j/=10)){
            if($i%10 == floor(($j%100)/10)){
                $equal = true;
                break;
            }
        }
        if($equal){
            break;
        }
    }
    if($equal){
        echo 'Число содержит две одинаковые цифры';
    }else{
        echo 'Число не содержит одинаковых цифр';
    }

}
