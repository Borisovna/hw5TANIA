<?php
include_once ('class_car.php');
class niva_car extends Car{
    public function __construct ()
    {
        parent::__construct ();
        $this->color = 'зеленый';
    }
}