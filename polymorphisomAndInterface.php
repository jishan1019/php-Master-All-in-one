<?php

interface Vehicel
{
    public function vehicleWheel();
}


// class Vehicle
// {
//     public $wheels;

//     public function __construct($wheel)
//     {
//         $this->wheels = $wheel;
//     }

//     public function vehicleWheel($wheel)
//     {
//         echo "This vehicle name is $wheel ";
//     }
// }

class Motorcycle implements Vehicel
{
    public $wheels;

    public function __construct($wheel)
    {
        $this->wheels = $wheel;
    }

    public function vehicleWheel()
    {
        echo "This vehicle wheel number is $this->wheels ";
    }
}

function showValue(Vehicel $v)
{
    $v->vehicleWheel();
}

$showWheels = new Motorcycle("4");
showValue($showWheels);
