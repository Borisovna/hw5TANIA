<?php
include_once ('class_car_niva.php');
include_once ('class_car_reno.php');

$niva = new niva_car();
$niva->go('вперед',20,200,1);

echo '<br>';

$reno = new Car();
$reno->go('вперед',60,200,0);



