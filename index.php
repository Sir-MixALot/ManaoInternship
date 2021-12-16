<?php

//Task 1.6

for($i=1000; $i<=9999; $i++){
    for($j = $i; $j>0; $j=floor($j/=10)){
        $count = 0;
        if($j%10 == 0 || $j%10 == 2 || $j%10 == 3 || $j%10 == 7){

            $count+=1;
        }
        echo $count. "/";
        if($count+1 == 4){
            echo $i. "</br>";
        }
    }


}

