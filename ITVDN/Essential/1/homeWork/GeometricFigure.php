<?php


class GeometricFigure
{
    public $name = 'figure';
    public $width = 0;
    public $height = 0;

    public $counter = 1;

    public function transform($randomMaxNumber = 10){
        $this->counter ++;
        $this->height = $this->height + rand(0, $randomMaxNumber);
        $this->width = $this->width + rand(0, $randomMaxNumber);
        $this->name = "$this->name $this->counter";
    }
}