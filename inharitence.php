<?php

/**
 * inharitence mane previous kono class theke oyta next kono class e use kora
 * 
 * 
 */


// class Vehicle
class VehicleBike
{

    public $wheel;

    public function VehicelBikeName($name)
    {
        echo "The Vehicle name is $name";
    }
}


class Motorcycle extends VehicleBike
{
    public $weight;
}


$honda = new Motorcycle();
$honda->wheel = 9;
echo $honda->wheel;
