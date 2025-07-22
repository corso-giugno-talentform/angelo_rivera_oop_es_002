<?php

class Rettangolo
{
    public $base;
    public $altezza;

    public function __construct($base, $altezza)
    {
        $this->base = $base;
        $this->altezza = $altezza;
    }

    use Calculator;
}



trait Calculator
{
    public function sum($a, $b)
    {
        return $a + $b;
    }
    public function sub($a, $b)
    {
        return $a - $b;
    }
    public function mul($a, $b)
    {
        return $a * $b;
    }
    public function div($a, $b)
    {
        return $a / $b;
    }
    public function sqr($a)
    {
        return sqrt($a);
    }
}

$rettangolo = new Rettangolo(10, 5);

echo "\nArea: " . $rettangolo->mul($rettangolo->base, $rettangolo->altezza) . "\n";
echo "Perimetro: " . $rettangolo->mul(2, $rettangolo->sum($rettangolo->base, $rettangolo->altezza)) . "\n";
echo "Diagonale: " . number_format($rettangolo->sqr($rettangolo->sum($rettangolo->mul($rettangolo->base, $rettangolo->base), $rettangolo->mul($rettangolo->altezza, $rettangolo->altezza))), 2, ',', '.') . "\n";
