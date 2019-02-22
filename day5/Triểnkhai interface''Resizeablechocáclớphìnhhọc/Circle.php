<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/02/2019
 * Time: 23:23 CH
 */
include_once ("Resizeable.php");
include_once ("Shape.php");
class Circle extends Shape implements Resizeable{
    private $radius;

    public function Circle($radius){
        $this->radius = $radius;
    }
    public function resize($numberSize){
        return $this->getArea()*$numberSize;
    }
    public function setArea($radius){
        $this->radius = $radius;
    }
    public function getArea(){
        return pow($this->radius,2)*PI();
    }
}


