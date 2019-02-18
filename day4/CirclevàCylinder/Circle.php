<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 11:23 SA
 */

class Circle
{
    private $radius;
    private $color;

    public function Circle($radius,$color){
        $this->radius = $radius;
        $this->color = $color;
    }

    public function set_radius($radius){
        $this->radius = $radius;
    }

    public function get_radius(){
        return $this->radius;
    }


    public function set_color($color){
        $this->color = $color;
    }

    public  function get_color(){
        return $this->color;
    }

    public function toString(){;
        echo "ban kinh duong tron: " .$this->radius ." mau sac: " .$this->color;
    }

    public function dientich(){
        echo "dien tich duong tron:" .pow($this->radius,2 )* pi();
    }
}
?>