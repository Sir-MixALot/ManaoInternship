<?php

//partial permutation
// phpinfo();

$result = new Permutation('12345', 3);

class Permutation
{

    public $inString;
    public $subset;
    public $outString;
    public $count;

    public function __construct($inString, $subset)
    {
        try {
            $this -> checkString($inString);
            $this -> inString = str_split($inString);
            $this -> checkKey($subset);
            $this -> subset = $subset;
            $this -> outString = '';
            $this -> count = 0;
            $this -> Permutation();
            $this -> customPermutation();
        } catch (Exception $e) {
            echo 'Исключение: ' . $e -> getMessage() . '</br>';
        }
    }

    public function checkString($inString)
    {
        if (!is_string($inString)) {
            throw new Exception('Начальное значение должно быть строкой: ' . $inString . ' - ' . gettype($inString));
        }
    }

    public function checkKey($subset)
    {
        if ($subset == 0 || $subset > count($this -> inString)) {
            throw new Exception('Значение k должно быть в диапазоне от 1 до : ' . count($this -> inString));
        }
    }

    public function Permutation()
    {
        echo "Количество возможных комбинаций по формуле комбинаторики: " . ($this -> getFactorial(count($this -> inString)) / $this -> getFactorial(count($this -> inString)-$this -> subset)) . '</br>';
    }

    public function getFactorial($number)
    {
        if ($number <= 1) {
            return 1;
        }

        return $number * $this->getFactorial($number - 1);
    }

    public function customPermutation()
    {
        for ($i = 0; $i <= count($this -> inString) - 1; $i++) {
            $outStringPrototype = $this -> outString;
            $arrayPrototype = $this -> inString;
            $outStringPrototype .= $arrayPrototype[$i];

            if ($this -> subset == 1) {
                echo $this -> inString[$i] . '</br>';
                $this -> count += 1;
            } else {
                array_splice($arrayPrototype, $i, 1);
                $this -> getCustomPermutation($arrayPrototype, $this -> subset - 1, $outStringPrototype);
            }
        }
        echo 'Количество получившихся комбинаций: ' . $this -> count;
    }

    public function getCustomPermutation(array $arrayPrototype, $subset, $outString)
    {
        if ($subset == 1) {

            for ($i = 0; $i <= count($arrayPrototype) - 1; $i++) {
                $outStringPrototype = $outString;
                echo $outStringPrototype .= $arrayPrototype[$i] . '</br>';
                $this -> count += 1;
            }

        } else {

            for ($j = 0; $j <= count($arrayPrototype) - 1; $j++) {
                $outStringPrototype = $outString;
                $arrPrototype = $arrayPrototype;
                $outStringPrototype .= $arrayPrototype[$j];
                array_splice($arrPrototype, $j, 1);
                $this -> getCustomPermutation($arrPrototype, $subset - 1, $outStringPrototype);
            }
        }
    }
}
