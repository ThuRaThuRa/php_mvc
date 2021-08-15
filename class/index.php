<?php
class Car
{
    protected $carName;
    public static function start()
    {
        echo "Car is start";
    }
    public function __construct($carName)
    {
        $this->carName = $carName;
    }
    private function drive()
    {
        echo "$this->carName is driving";
    }
    public function getDrive()
    {
        $this->drive();
    }
}