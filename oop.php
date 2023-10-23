<?php

// //Class component
// class Vehicle
// {
//     public $wheel;

//     public function VehicelName($name)
//     {
//         echo "The Vehicle name is $name";
//     }
// }

// $car = new Vehicle();
// $car->wheel = 6;
// print_r($car);
// $car->VehicelName("Ferari");


// $bus = new Vehicle();
// $bus->wheel = 10;
// print_r($bus);


class AirBus
{
    public $wheel;

    public function VehicelName($name)
    {
        echo "The name of this vehicle $name";
    }
}


$flight = new AirBus();
$flight->wheel = 8;
print_r($flight);


$flightName = new AirBus();
$flightName->VehicelName("Biman Bangladesh");
print_r($flightName);
