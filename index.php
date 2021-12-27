<?php

//Task 1.30
$n = 1000;
$m = (2*$n)+1;
for($i=$n; $i<=$m; $i++){
    if(isSimpleNumber($i)){
            if(isSimpleNumber($i+2)){
                echo $i . '+' . ($i+2) . '</br>';
            }
    }
}

function isSimpleNumber($n)
{
    $simple = true;


    $SquareRoot = floor(sqrt($n));
    for ($i = 2; $i <= $SquareRoot; $i++)
    {
        if ($n % $i == 0)
        {
            $simple = False;
            break;
        }
    }
    return $simple;

}