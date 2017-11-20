<?php
include 'trait_transmis.php';
class myCar{
    use transmis;
    public $direction;//направление движения
    public $distance;// растояние движения
    public $speed;//скорость
    public $color;
    protected $parameters;// параметры двигателя
    
    public function __construct() {
//        echo "Запущен конструктор<br>";
        $this->color='белый';
        
    }
//    protected function __destruct() {
//        echo "Запущен деструктор";
//    }
    
    //включение двизателя
    public function inclusion(){
        echo "Двигатель запустили! <br>";
    }
    
    public function go($direction,$speed,$distance,$trans){
        $this->inclusion ();
        $color=$this->get_color ();
        echo "Наша $color машина, едет $direction, со скоростью $speed м/с, на дистанцию  $distance км. <br>";
        $this->transmis ($trans,$speed);
        $this->dvigatel ($speed,$distance);
    }
    protected function dvigatel($speed,$distance){
        $a=10*90/5; // сколько метров нужно проехать чтобы мотор разогрелся до 90 град.
        $b=$a/$speed;
        echo "<br>Проехав $a метров, через $b часов включилось охлаждение мотора!<br>";
        
    }
    public function set_color($new_color){
        $this->color=$new_color;
    }
    public function get_color(){
        return $this->color;
    }


}