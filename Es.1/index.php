<?php

class Continent
{
    public $name;


    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getMyCurrentLocation()
    {
        echo "Mi trovo in " . $this->name . ", ";
    }
}

class Country extends Continent
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getMyCurrentLocation()
    {
        echo $this->name . ", ";
    }
}

class Region extends Country
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getMyCurrentLocation()
    {
        echo $this->name . ", ";
    }
}

class Province extends Region
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getMyCurrentLocation()
    {
        echo $this->name . ", ";
    }
}

class City extends Province
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getMyCurrentLocation()
    {
        echo $this->name . ", ";
    }
}

class Street extends Province
{
    public function __construct($name)
    {
        parent::__construct($name);
    }
    public function getMyCurrentLocation()
    {
        echo $this->name;
    }
}

$mycontinent = new Continent('Europa');
$mycountry = new Country('Italia');
$myregion = new Region('Lazio');
$myprovince = new Province('RM');
$mycity = new City('Roma');
$mystreet = new Street('Via Cassia');

$mylocation = [$mycontinent, $mycountry, $myregion, $myprovince, $mycity, $mystreet];

foreach ($mylocation as $myloc) {
    $myloc->getMyCurrentLocation();
}
