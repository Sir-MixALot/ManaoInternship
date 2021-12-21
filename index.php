<?php

//Task 1.1

$n = 6012;
$m = 15;
$k = 3;
echo $n.' - стартовое число</br>' . $m.' - количество чисел</br>' . $k . ' - специальное число</br>';

for($i=$n;$m>0;$i++){
    $m--;
    $can = true;
    $nCount = ceil(log($i, 10));
    if($nCount>2){
        $can = (checkSum($i, $k));
        if(!$can){
            echo $i. ' - нельзя</br>';
        }else{
            echo $i. ' - можно</br>';
        }
    }else{
        echo $i . ' - нельзя</br>';
    }
}

function checkSum($n, $k)
{
    $zero = 0;
    $kCount = 0;
    $wholeSum = 0;
    for($j=$n; $j>0;$j=floor($j/10)){
        $wholeSum +=$j%10;
        if($j%10 == 0){
            $zero++;
        }
        if($j%10 == $k){
            $kCount++;
        }
    }
    if($zero && $kCount){
        return true;
    }else if($wholeSum==$k && $zero || $wholeSum>$k){
        return modifyNumber($n, $k);
    }else {
        return false;
    }
}

function modifyNumber($n, $k)
{
    for($i=$n;$i>99;$i=floor($i/10)){
        if($i%10<$k){
            for($j=$n;$j>=10;$j=floor($j/10)){
                echo $i%10 . '+' . floor(($j%100)/10) .'='.$k .'</br>';
                if($i%10 + floor(($j%100)/10) == $k){
                    return true;
                }
            }
        }
    }
}