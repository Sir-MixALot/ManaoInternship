<?php

//Task 1.24

$N = 128;
echo $N . ' - ваше число</br>';
$binar = 1;
$out = 0;
$dechex = '';
for($i=$binar; $i<=$N; $i*=2){
    $binar = $i;
}
getBinar($N, $binar, $out);
getDechex($N, $dechex);

function getBinar($n, $b, $o)
{
    if($n>=$b){
        $o = ($o*10)+1;
        if(($n-$b)>0){
            getBinar($n-$b,$b/2,$o);
        }else{
            $o*=10**(log($n, 2));
            echo $o . '</br>';
        }

    }else{
        $o *=10;
        getBinar($n,$b/2,$o);
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

