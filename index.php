<?php

//Task 1.10

$N = 100;
echo $N . " - ваше число</br>";
if(floor($N/10)==0){
    echo "Введите число больше одной цифры";
}else{
    $count = 0;
    for($i=$N-1;$i>=10;$i--){
        if(getPalindrome($i)){
            $square =  $i**2;
            if(getPalindrome($square)){
                $count+=1;
                echo $i . " - это палиндром</br>";
                echo $square . " - квадрат числа - это тоже палиндром</br>";
            }

        }

    }
    if($count == 0){
        echo "Нет чисел меньше вашего, которые явл палиндромом</br>";
    }
}

function getPalindrome($number)
{
    for($j=$number; $j>1; floor($j/=10)){
        $palindrome = $palindrome*10+($j%10);
    }
    if($palindrome == $number){
        return true;
    }else{
        return false;
    }
}