<?php


class Car
{

    public $brand = 'Mitsubishi';
    public $color= 'black';
    public $maxSpeed = 100;
    public $currentSpeed = 0;

    public function move($speed){
        $this->currentSpeed = $speed;
        echo 'Move-move';
    }
    public function stop(){
        $this->currentSpeed = 0;

    }
}