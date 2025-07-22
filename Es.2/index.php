<?php

class Company
{

    public $cname;
    public $clocation;
    public $ctotaldip;



    public function __construct($cname,  $clocation,  $ctotaldip)
    {
        $this->cname = $cname;
        $this->clocation = $clocation;
        $this->ctotaldip = $ctotaldip;
    }
}


$company1 = new Company('Apple', 'USA', 3);
$company2 = new Company('Barilla', 'ITA', 3);
$company3 = new Company('Nintendo', 'JAP', 5);
$company4 = new Company('Nokia', 'FIN', 10);
$company5 = new Company('Xioami', 'CHI', 3);

var_dump($company1);
