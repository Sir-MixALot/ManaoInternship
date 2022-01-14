<?php

//partial permutation

$x = new Permutation('12345', 3);
class Permutation
{
    public $a, $k, $outString, $count;

    public function __construct($a, $k)
    {
        
        try{
            $this->checkString($a);
            $this->a = str_split($a);
            $this->checkKey($k);
            $this->k = $k;
            $this->outString = '';
            $this->count = 0;
            $this->Permutation();
            $this->customPermutation();
        }catch(Exception $e){
            echo 'Исключение: ', $e->getMessage(), '</br>';
        }
        
    }

    public function checkString($a)
    {
        if(!is_string($a)){
            throw new Exception('Начальное значение должно быть строкой: '.$a .' - ' . gettype($a));
        }
    }

    public function checkKey($k)
    {
        if($k==0 || $k>count($this->a)){
            throw new Exception('Значение k должно быть в диапазоне от 1 до : '.count($this->a));
        }
    }

    public function Permutation()   
    {
        echo "Количество возможных комбинаций по формуле комбинаторики: " .($this->getFactorial(count($this->a))/$this->getFactorial(count($this->a)-$this->k)).'</br>';
    }

    public function getFactorial($z)
    {
        if ($z <= 1) return 1; 
        return $z * $this->getFactorial($z - 1);
    }

    public function getAmount()
    {
        $amount = 1;
        for($i=count($this->n); $i>(count($this->n)-$this->m);$i--){
            $amount*=$i;
        }
        return $amount;
    }

    public function customPermutation()
    {
        for($i=0;$i<=count($this->a)-1;$i++){
            $outStringPrototype = $this->outString;
            $arrayPrototype = $this->a;
            $outStringPrototype .= $arrayPrototype[$i];
            if($this->k==1){
               echo $this->a[$i].'</br>';
               $this->count+=1;
            }else{
                array_splice($arrayPrototype,$i,1);
                $this->getCustomPermutation($arrayPrototype, $this->k-1, $outStringPrototype);
            }
        }
        echo 'Количество получившихся комбинаций: '.$this->count;
        
    }

    public function getCustomPermutation(array $arr, $k, $outString)
    {
        if($k==1){
            for($i=0;$i<=count($arr)-1;$i++){
                $outStringPrototype=$outString;
                echo $outStringPrototype.=$arr[$i].'</br>';
                $this->count+=1;
            }
        }else{
            for($j=0;$j<=count($arr)-1;$j++){
                $outStringPrototype=$outString;
                $arrPrototype=$arr;
                $outStringPrototype.=$arr[$j];
                array_splice($arrPrototype,$j,1);
                $this->getCustomPermutation($arrPrototype,$k-1,$outStringPrototype);
            }
        }
    }
}