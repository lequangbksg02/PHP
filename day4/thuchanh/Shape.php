<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 9:54 SA
 */


class Shape
{
    public $name;

    public function Shape($name){
        $this->name = $name;
    }

    public function show(){
        return "I am a shape. My name is $this->name";
    }
}
?>