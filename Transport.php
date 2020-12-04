<?php


class Transport
{

    public $hight;
    public $weight;

    public function __construct(int $hight, int $weight)
    {
        $this->hight = $hight;
        $this->weight = $weight;
    }

}