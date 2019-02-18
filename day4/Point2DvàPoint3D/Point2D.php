<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 14:24 CH
 */

class Point2D
{
    private $x = 0;
    private $y = 0;
    public function Point2D($x,$y){
        $this->x = $x;
        $this->y = $y;
    }

    public function set_X($x){
        $this->x = $x;
    }
    public function get_X(){
        return $this->x;
    }

    public function set_Y($y){
        $this->y = $y;
    }
    public function get_Y(){
        return $this->y;
    }

    public function set_XY($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function get_XY(){
        $arrayXY = array($this->x, $this->y);
        return $arrayXY;
    }

    public function toString(){
        echo "Toa do XY la: ($this->x, $this->y)";
    }

}
?>