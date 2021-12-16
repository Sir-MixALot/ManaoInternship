<?php

//Task 1.1 v2

$x = 5;
$N = 5455;
echo 'Ваше число: ' .$N. '</br>';

for($i=$N; $i=0; $i=$i/10){
    $count = 0;
    echo $i;
//    if($i%10==$x){
//        $count+=1;
//    }
    echo 'Количество цифр, равных'.$x.': ' . $count;
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

//

