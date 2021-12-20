<?php

//Task 1.24

$N = 1569745;
echo $N . ' - ваше число</br>';
$binar = 1;
$dechex = '';
$count = 0;
getBinar($N, $binar, $count);
getDechex($N, $dechex);

function getBinar($N, $M, $count)
{
    if($N>1){
        if($N%2==0){
            $M=$M/10;
            $count++;
        }else{
            $M=$M/10+1;
            $count++;
        }
        getBinar(floor($N/2), $M, $count);
    }else{
        $M=$M/10+1;
        echo floor($M*(10**$count)) . ' в двоичной системе счисления</br>';
    }
}

function getDechex($N, $m)
{
    if($N>0){

        switch ($N%16){
            case 10: $m = 'A' . $m; break;
            case 11: $m = 'B' . $m; break;
            case 12: $m = 'C' . $m; break;
            case 13: $m = 'D' . $m; break;
            case 14: $m = 'E' . $m; break;
            case 15: $m = 'F' . $m; break;
            default: $m = $N%16 . $m;
        }

        getDechex(floor($N/16), $m);
    }else{

        echo $m;

    }


}

