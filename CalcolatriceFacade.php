<?php

class CalcolatriceFacade
{

    public function sum(int $x, int $y, int $c, int $d)
    {

        $a = new Calcolatrice();
        $resA = $a->add ($x, $y);


        $b = new Calcolatrice();
        $resB = $b->add ($c, $d);


        return $resA + $resB;
    }


}

