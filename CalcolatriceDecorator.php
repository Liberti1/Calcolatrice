<?php

class CalcolatriceDecorator
{
    protected $calcolatrice = null;

    public function __construct(calcolatrice $calcolatrice)
    {
        $this->Calcolatrice = $calcolatrice;
    }

    public function add(int $x, int $y)
    {
       $res = $this->Calcolatrice->add($x, $y);
        echo $res . PHP_EOL;
        return $res;
    }

    public function sot(int $x, int $y)
    {
        $res = $this->Calcolatrice->sot($x, $y);
        echo $res . PHP_EOL;
        return $res;
    }

    public function molt(int $x, int $y)
    {
        $res = $this->Calcolatrice->molt($x, $y);
        echo $res . PHP_EOL;
        return $res;
    }

    public function div(int $x, int $y)
    {
        $res = $this->Calcolatrice->div($x, $y);
        echo $res . PHP_EOL;
        return $res;
    }

}
