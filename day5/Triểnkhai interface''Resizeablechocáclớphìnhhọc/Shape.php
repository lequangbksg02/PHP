<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 14:55 CH
 */

class Shape
{
    public $name;

    public function Shape($name){
        $this->name = $name;
    }

    public function getArea(){
        return "dien tich";
    }
}