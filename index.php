<?php

//partial permutation

$a = new Permutation(1235, 4);
class Permutation
{
    public $n, $m, $x=[], $count;

    public function __construct($n, $m)
    {
        $this->x[] = $n;
        $this->n = array_map('intval', str_split($n));
        $this->m = $m;
        $this->count = $this->getAmount();
        // $this->Permutation();
        $this->customPermutation();
    }

    public function Permutation()   
    {
        echo "Количество возможных комбинаций: " .($this->getFactorial(count($this->n))/$this->getFactorial(count($this->n)-$this->m));
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
        shuffle($this->n);
            
        while($this->count>0){
            foreach($this->x as $value){
                if($value!=(int)implode($this->n)){
                    $this->x[] = (int)implode($this->n);
                    $this->count--;
                    $this->customPermutation();
                }else{
                    continue;
                }
               
            }
        }
        
        // $b = (int)implode($y); 
        // echo gettype($b);
        // 
        // var_dump($this->n);
    }
}