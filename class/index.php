<?php
class Car
{

    public static function startEngine()
    {
        echo "start engine";
        return new Car;
    }
    public function whatIsThis()
    {
        return $this;
    }
    public function drive()
    {
        return "This is drive method";
    }
}
$c = new Car;
echo $c->drive();  //This is drive

// var_dump($c->whatIsThis());