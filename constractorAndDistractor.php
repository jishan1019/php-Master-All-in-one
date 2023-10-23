<?php

/**
 * Constractor use kora hoy class er variable bahire declear na kore class er moddei declear kore use korar jonno.
 * 
 * Ar Distractor use kora hoy kono man k vanishan korar jonno
 * 
 * constract use kori calls er modde variable value set korte .
 * ar Distractor use kori code ti render howar pore class componenet er all value k vanish kore deyar jonno
 */


//Constractor 
class Vehicle
{
    public $wheels;

    public function __construct($wheel)
    {
        $this->wheels = $wheel;
    }

    public function VehicelName($name)
    {
        echo "This Vehicle is $name";
    }


    public function __destruct()
    {
        $this->wheels = null; //Remove wheel value for ssecurity perpus 
    }
}


$car = new Vehicle(15);
// $car->wheels = 6;
print_r($car);

define('CAR_NAME', 'FERARI');

echo CAR_NAME;
