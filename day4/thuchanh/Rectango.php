<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 9:55 SA
 */
include_once ("Shape.php");
class Rectango extends Shape{
    public $width;
    public $height;

    public function Rectango($name, $width, $height){
        parent::Shape($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calcutatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}
?>