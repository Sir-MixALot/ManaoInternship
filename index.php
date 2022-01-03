<?php

//task 1.29

$n=7000;
$m=1001;
$k=7;
$count = 0;
$changeCounter=0;
$numberPrototype=0;
$increaseNumberPrototype=0;

echo $n.' -стартовое число</br>'.$m.' -количество чисел</br>'.$k.' -специальное число</br>';

for($i=$n;$m>0;$i++){
    $m--;
    $numberPrototype=$i;
    $nCount = ceil(log($numberPrototype, 10));
    if($nCount>1){
        if(getNumberSum($numberPrototype)==$k && checkZero($numberPrototype)==0){
            echo $numberPrototype . ' - нельзя</br>';
        }else{
            $increaseNumber=getIncreaseNumber($numberPrototype)*(10**checkZero($numberPrototype));
            $increaseNumberPrototype=$increaseNumber;
            for($j=$changeCounter;true;$j=checkChangedSum($increaseNumberPrototype,$k,$changeCounter)){
                if($j==-1){
                    $count++;
                    echo $numberPrototype.' - можно</br>';
                    break;
                }else if($j+1==ceil(log($numberPrototype,10))){
                    echo $numberPrototype.' - нельзя</br>';
                    break;
                }
            }
        }
    }else{
        echo $numberPrototype . ' - нельзя</br>';
    }
}


function checkChangedSum($number, $k, $kCount)
{
    // echo $number.'('.$k.')['.$kCount.']/';
    global $numberPrototype, $increaseNumberPrototype;
    if((getNumberSum($increaseNumberPrototype)>$k)){
        if(((ceil(log($increaseNumberPrototype,10))>1))){
            $changedNumber=(floor($increaseNumberPrototype/(10**$kCount))*(10**(abs(1-$kCount))))+$increaseNumberPrototype%(10**(abs(1-$kCount)));
            if($number%10>$k){
                if(ceil(log($number,10))>1){
                    return checkChangedSum(floor($number/10),$k , $kCount);
                }else{
                    if($kCount==0){
                        return ceil(log($numberPrototype,10))-1;
                    }else{
                        $increaseNumberPrototype = $changedNumber;
                    }
                }
            }else if($number%10<$k){
                if(ceil(log($number,10))>1){
                    return checkChangedSum(floor($number/10),$k-($number%10),$kCount+=1);
                }else{
                    if($kCount==0){
                        return ceil(log($numberPrototype,10))-1;
                    }else{
                        $increaseNumberPrototype = $changedNumber;
                    }
                }
            }else if($number%10==$k){
                return -1;
            }
        }else{
            return ceil(log($numberPrototype,10))-1;
        }
    }else if((getNumberSum($increaseNumberPrototype)==$k)){
        return -1;
    }else{
        return ceil(log($numberPrototype,10))-1;
    }
}

function getNumberSum($number)
{
    $sum = 0;
    for($i=$number; $i>0;$i=floor($i/10)){
        $sum +=$i%10;
    }
    return $sum;
}

function checkZero($number)
{
    $zero = 0;
    for($i=$number; $i>0;$i=floor($i/10)){
        if($i%10==0){
            $zero += 1;
        }
    }
    return $zero;
}

function getIncreaseNumber($N)
{
    for($i = 1; $i < 10; $i++)
    {
        for($j=$N; $j>0; $j=floor($j/10)){
            if($j%10==$i){
                $M = ($M*10)+$i;
            }
        }
    }
    return $M;
}

echo '&&&&&&&'.$count;