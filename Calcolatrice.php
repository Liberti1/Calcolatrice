<?php

class Calcolatrice
{
    protected $index = 0;
    private static $instance = null;

    public static function getInstance()
    {
        if(self::$instance === null) {
            $instance = new Calcolatrice();
        }

        return self::$instance;
    }

    public function add (int $x, int $y)
    {
        $this->index = $x + $y;
        return $this->index;
    }

    public function sot (int $x, int $y)
    {
        $this->index = $x - $y;
        return $this->index;
    }

    public function molt (int $x, int $y)
    {
        $this->index = $x * $y;
        return $this->index;
    }

    public function div (int $x, int $y)
    {
        $this->index = $x / $y;
        return $this->index;
    }

}
