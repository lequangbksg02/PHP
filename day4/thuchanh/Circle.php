<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 9:55 SA
 */
include_once ("Shape.php");
class Circle extends Shape
{
    public $radius;
    public function Circle($name,$radius){
        parent::Shape($name);
        $this->radius = $radius;
    }
    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}
?>