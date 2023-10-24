<?php

/**
 * Public: atar mane atar all variable all jaigai access korte parbe
 * Private: atar mane only je class e declear kora sekhane use korte parbe 
 * Protected: atar mane only oy class and oytar children class mane extend calss access korte parbe
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
