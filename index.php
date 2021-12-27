<?php
//task 1.29

$n=12345678;
$m=20;
$k=33;
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
        if(getNumberSum($numberPrototype)==$k){
            echo $numberPrototype . ' - нельзя</br>';
        }else{
            $increaseNumber=getIncreaseNumber($numberPrototype);
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

function getIncreaseNumber($number)
{
    $increaseNumber=0;
    for($x = 1; $x < 10; $x++)
    {
        for($y=$number; $y>0; $y=floor($y/10)){
            if($y%10==$x){
                $increaseNumber = ($increaseNumber*10)+$x;
            }
        }
    }
    return $increaseNumber;
}

function getNumberSum($number)
{
    $sum = 0;
    for($i=$number; $i>0;$i=floor($i/10)){
        $sum +=$i%10;
    }
    return $sum;
}

echo '&&&&&&&'.$count;