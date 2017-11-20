<?php
include_once ('class.php');

$car=new myCar();
$car->go ('вперед',40,200,1);
echo '<br>';
$niva = new myCar ();
$niva->color="Зеленая";
$niva->go('вперед',40,200,1);

echo '<br>';
$reno = new myCar();
$reno->color="Красный";
$reno->go('вперед',60,200,0);



