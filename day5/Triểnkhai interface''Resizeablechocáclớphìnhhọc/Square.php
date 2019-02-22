<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 13:44 CH
 */
include_once ("Resizeable.php");
include_once ("Shape.php");
class Square extends Shape implements Resizeable
{
    private $canh;

    public function Square($canh){
        $this->canh = $canh;
    }
    public function resize($numberSize){
        return $this->getArea()*$numberSize;
    }


    public function set_DTHV($canh){
        $this->canh = $canh;
    }


    public function getArea(){
        return  $this->canh*$this->canh;
    }
}