<?php

class CalcolatriceDecorator
{
    protected $calcolatrice = null;

    public function __construct(int $calcolatrice)
    {
        $this->calcolatrice = $calcolatrice;
    }

    public function add (int $x, int $y) {
        $this->index = $x + $y;
        return $this->index;
        echo $this->index . PHP_EOL;
    }

    public function sot (int $x, int $y) {
        $this->index = $x - $y;
        return $this->index;
        echo $this->index . PHP_EOL;
    }

    public function molt (int $x, int $y) {
        $this->index = $x * $y;
        return $this->index;
        echo $this->index . PHP_EOL;
    }

    public function div (int $x, int $y) {
        $this->index = $x / $y;
        return $this->index;
        echo $this->index . PHP_EOL;
    }

}
