<?php

class Vertebrates
{
    public function iAm()
    {
        echo "Sono un animale Vertebrato \n\n";
    }
}

class WarmBlooded extends Vertebrates
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un animale a Sangue Caldo \n\n";
    }
}

class ColdBlooded extends Vertebrates
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un animale a Sangue Freddo \n\n";
    }
}
class Mammals extends WarmBlooded
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un mammifero \n\n";
    }
}

class Birds extends WarmBlooded
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un uccello \n\n";
    }
}
class Reptiles extends ColdBlooded
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un rettile \n\n";
    }
}
class Amphibians extends ColdBlooded
{
    public function iAm()
    {
        parent::iAm();
        echo "Sono un anfibio \n\n";
    }
}

class Fish extends ColdBlooded
{
    public function iAm()
    {
        parent::iAm();
        echo "Splash! \n\n";
    }
}


$magikarp = new Fish();
$serpente = new Reptiles();
$leone = new Mammals();
$pappagallo = new Birds();
$rana = new Amphibians();

$vertebrates = [$magikarp, $serpente, $leone, $pappagallo, $rana];

foreach ($vertebrates as $vertebrate) {
    $vertebrate->iAm();
    echo "==================\n\n";
}
