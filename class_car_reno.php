<?php
include_once ('class_car.php');
class reno_car extends Car implements Premium{
    public function __construct ()
    {
        parent::__construct ();
        $this->color = "<b>белая</b>";
    }
    public function prem($pr)
    {
        echo 'Рено- машина премиум класса, :-)';
    }
}