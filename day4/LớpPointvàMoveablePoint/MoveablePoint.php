<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 16:49 CH
 */
include_once ("Point.php");
class MoveablePoint extends Point
{
    private $xSpeed;
    private $ySpeed;

    public function MoveablePoint($x,$y,$xSpeed,$ySpeed){
        parent::Point($x,$y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;

    }

    public function getXSpeed(){
        return $this->xSpeed;
    }
    public function setXSpeed($xSpeed){
        $this->xSpeed = $xSpeed;
    }


    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function setYSpeed($ySpeed){
        $this->ySpeed = $ySpeed;
    }


    public function setSpeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed(){
        return $this->xSpeed.",".$this->ySpeed;
    }

    public function toString(){
        echo parent::toString();
        echo ",speed =(" .$this->getSpeed(). ")";
    }

    public function move(){
       return ($this->setX($this->getX()+$this->xSpeed).",".$this->setY($this->getY()+$this->ySpeed));

    }
}