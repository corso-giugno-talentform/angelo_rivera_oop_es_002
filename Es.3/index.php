<?php

class Car
{
    private $num_telaio;

    public function __construct($num_telaio)
    {
        $this->num_telaio = $num_telaio;
    }

    public function mycar()
    {
        echo "La mia macchina è Fiat con numero di telaio " . $this->num_telaio;
    }
}

class Fiat extends Car
{
    protected $license;
    protected $color;

    public function __construct($num_telaio, $license, $color)
    {
        parent::__construct($num_telaio);
        $this->license = $license;
        $this->color = $color;
    }
    public function mycar()
    {
        parent::mycar();
        echo ", licenza " . $this->license . " e di colore " . $this->color;
    }
}

$car = new Fiat(21321, 'Boh', 'Rosso');

var_dump($car);

$car->mycar();
