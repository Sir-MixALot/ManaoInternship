<?php

//Task 1.3

$N = 1235;
$count = 0;
echo 'Ваше число: ' .$N. '</br>';
$NCount  = ceil(log10($N));
if(floor($N/10)==0){
    echo "Введите число больше одной цифры";
}else{
    for($i=$N; $i>=1; $i/=10){
        if(floor($i%10)>floor(($i%100)/10)){
            $count+=1;
        }
    }
}

if($count+1 != $NCount){
    echo 'Это число состоит из возрастающей последовательности!';
}else{
    echo 'Это число не состоит из возрастающей последовательности!';
}

//function getCount($x, $N, $count)
//{
//    if($N%10 == $x){
//        $count+=1;
//    }
//    if($N/10>1){
//        return getCount($x, floor($N/10), $count);
//    }
//    echo 'Количество цифр, равных'.$x.': ' . $count;
//}
//echo getCount($x, $N, $count);



