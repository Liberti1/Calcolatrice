<?php

class CalcolatriceFacade
{

    protected $calcolatrice;

    public function sum(int $x, int $y, int $c, int $d)
    {

        $a = Calcolatrice::getInstance();
        $a->add ($x, $y);


        $b = Calcolatrice::getInstance();
        $b->add ($c, $d);

        $index = $a + $b;
        return $index;
    }


}

