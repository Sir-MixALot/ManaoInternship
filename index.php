<?php

//Task 1.12

$N = 13;
if($N>0){
    if(isSimpleNumber($N)){
        echo $N . ' явл простым числом';
    }else{
        echo $N . ' не явл простым числом';
    }
}else{
    echo 'Ноль не является простым числом';
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