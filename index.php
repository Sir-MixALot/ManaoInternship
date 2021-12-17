<?php

//Task 1.14
$count = 0;
for($i=1; $count<10; $i+=2){
    if(isSimpleNumber($i)){
        for($j=$i+2; $count<10; $j+=2){
            if(isSimpleNumber($j)){
                $count++;
                echo $i . '+' . $j . '</br>';
                break;
            }else{
                break;
            }
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