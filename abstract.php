<?php

//Abstract class er kono object create korte parbo na . only inharit or extance korte parbo

abstract class Vheicle
{
    public $wheels;

    public function vehicleName($name)
    {
        echo "The name is $name";
    }

    abstract function showName();
}

class Car extends Vheicle
{

    //abstract thakle oyta extence funtion e thakbe
    public function showName()
    {
        echo "Abstract function call";
    }
}

$v = new Car();
$v->vehicleName("car");
$v->showName();
