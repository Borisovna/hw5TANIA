<?php
class myCar{
    public $direction;//направление движения
    public $distance;// растояние движения
    public $speed;//скорость
    public $color;
    protected $parameters;// параметры двигателя
    
    protected function __construct() {
        echo "Запущен конструктор";
        $this->color='white';
        
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
    public function set_color($new_color){
        $this->color=$new_color;
    }
    public function get_color(){
        return $this->color;
    }


}