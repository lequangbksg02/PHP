<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 16:49 CH
 */

class Point
{
    private $x = 0;
    private $y = 0;

    public function Point($x, $y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getX(){
        return $this->x;
}
    public function setX($x){
        $this->x = $x;
    }

    public function getY(){
        return $this->y;
    }
    public function setY($y){
        $this->y = $y;
    }


    public function setXY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY(){
        $arrayXY = array($this->x, $this->y);
        return $arrayXY;
    }

    public function toString(){
        echo "Toa do XY la: ($this->x, $this->y)";
    }
}