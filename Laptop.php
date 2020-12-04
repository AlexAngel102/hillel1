<?php

class Laptop
{
    public $model;
    public $processor;
    public $videocard;
    public $isTurnedOn = false;

    public function __construct(string $model, string $processor, string $videocard)
    {
        $this->model = $model;
        $this->processor = $processor;
        $this->videocard = $videocard;
    }

    public function turnOn()
    {
        $this->isTurnedOn = true;
    }

    public function turnOff()
    {
        $this->isTurnedOn = false;
    }
}

$laptop1 = new Laptop('Lenovo', 'Core-i7', 'GeForce GTX1060');
var_dump($laptop1);
echo "<br>";
$laptop1->turnOn();
var_dump($laptop1);
echo "<br>";
$laptop1->turnOff();
var_dump($laptop1);