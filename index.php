<?php

//Task 1.29

$n = 99;
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
    $wholeSum = 0;
    for($j=$n; $j>0;$j=floor($j/10)){
        $wholeSum +=$j%10;
        if($j%10 == $k){
            return false;
        }
    }
    if($wholeSum<=$k){
        return false;
    }else{
        return true;
    }

}