<?php

//Task 1.28

$N = 78;
$M = 1435;
echo $N.' - стартовое число</br>';
echo $M.' - количество чисел</br>';

if(floor($N/10)==0) {
    echo "Введите число больше одной цифры";
}else{
    for($x=$N; $M>0; $x++){

        $out = 0;
        $M--;
        for($i = 9; $i >=0 ; $i--){
            for($j=$x; $j>0; $j=floor($j/10)){
                if($j%10==$i){
                    $out = ($out*10)+$i;
                }
            }
        }

        echo $x .'--'. $out.'/</br>';
    }
}

