<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 17/02/2019
 * Time: 23:23 CH
 */
include_once ("Resizeable.php");
include_once ("Shape.php");
class Rectangle extends Shape implements Resizeable {
    private $chieudai;
    private $chieurong;

    public function Rectangle($chieudai,$chieurong){
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;
    }
    public function resize($numberSize){
       return $this->getArea()*$numberSize;

    }
    public function setArea($chieudai,$chieurong){
        $this->chieudai = $chieudai;
        $this->chieurong = $chieurong;
    }

    public function getArea(){
        return ($this->chieudai*$this->chieurong);
    }

}