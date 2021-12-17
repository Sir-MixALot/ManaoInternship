<?php

//Task 1.14
$count = 0;
for($i=1; $count<15; $i+=2){
    if(isSimpleNumber($i)){
            if(isSimpleNumber($i+2)){
                $count++;
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
    if ($simple){
        return true;
    }else{
        return false;
    }

}