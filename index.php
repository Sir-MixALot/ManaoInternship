<?php

//Task 2.1

$a = [1,0,2,3,-2,5,8,6,-9,7,1,6];
echo '<pre>' . print_r($a, true) . '</pre>';
$count=0;
$sum=0;
for($i=0;$i<count($a);$i++){
    if($a[$i]>=0){
        $count++;
    }else{
        break;
    }
    
}

for($y=count($a)-1;$y>=0;$y--){
    if($a[$y]>0){
         $sum+=$a[$y];          
    }else{
        break;
    }
}

echo '</br>Количество элементов до первого отрицательного числа = '.$count.'</br>';
echo 'Сумма нечетных элементов после последнего отрицательного числа = '.$sum.'</br>';
