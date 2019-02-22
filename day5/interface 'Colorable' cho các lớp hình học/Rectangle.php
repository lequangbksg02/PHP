<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 16:27 CH
 */
include_once ("Colorable.php");
include_once ("Shape.php");
class Rectangle extends Shape implements Colorable
{
    private $chieudai;
    private $chieurong;

    public function Rectangle($chieudai,$chieurong){
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;
    }

    public function howToColor($color)
    {
       echo "Color all four sides $color";
    }

    public function setArea($chieudai,$chieurong){
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;
    }
    public function getArea(){
        return ($this->chieudai*$this->chieurong);
    }

}
