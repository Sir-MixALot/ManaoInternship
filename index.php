<?php

//Task 1.22

$N = 48;
echo $N . ' ваше число</br>';
if(checkSimple($N)){
    echo '1/'.$N;
}else{
    getFactors($N);
}


function getFactors($n)
{
    $maxDevider = 0;
    for($i=$n-1;$i>=2;$i--){
        if($n%$i==0){
            echo $n/$i.'/';
            $maxDevider = $i;
            break;
        }
    }
    if(!checkSimple($maxDevider)){
        getFactors($maxDevider);
    }else{
        echo $maxDevider.'/';
    }
}

function checkSimple($n)
{
    $simple = true;
    $half = floor($n/2);
    for ($i = 2; $i <= $half; $i++)
    {
        if ($n % $i == 0)
        {
            $simple = False;
            break;
        }
    }
    return $simple;

}