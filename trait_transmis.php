<?php
trait transmis{
    function transmis ($mex_auto,$speed){//механич. или автомат, включена или выкл коробка передач
        switch ($mex_auto){
            case '1';{//механика
                echo 'У вас механическая коробка передач, поехали!<br>';
                if($this->speed<=30 && $this->speed>0 ){
                    echo 'Первая передача включена!';
                }elseif ($this->speed > 30) {
                    echo 'Включилась вторая передача<br>';
                }else{
                    echo 'Вы Шумахер, не гоните!';
                }
            };break;
            case '0';{//
                echo 'Вы счачтливый обладатель автоматической коробки передач, поехали!<br>';
            };break;
           
        }
        
    }
    
}