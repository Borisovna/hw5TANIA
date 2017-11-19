<?php
class myCar{
    public $direction;//направление движения
    public $distance;// растояние движения
    public $speed;//скорость
    public $color;
    protected $parameters;// параметры двигателя
    
    public function __construct() {
//        echo "Запущен конструктор<br>";
        $this->color='белый';
        
    }
    protected function __destruct() {
        echo "Запущен деструктор";
    }
    
    //включение двизателя
    public function inclusion(){
        echo "Двигатель запустили! <br>";
    }
    //переключение передачи
    public function transfer_switch($switch){
        echo "Включена $switch передача! <br>";
        
    }
    public function go($direction,$speed,$distance,$switch='1'){
        $this->inclusion ();
        $this->transfer_switch ($switch);
        $color=$this->get_color ();
        echo "Наша $color машина, едет $direction, со скоростью $speed м/с, на дистанцию  $distance км. <br>";
    }
    public function set_color($new_color){
        $this->color=$new_color;
    }
    public function get_color(){
        return $this->color;
    }


}