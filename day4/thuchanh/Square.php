<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 10:28 SA
 */
include_once ("Rectango.php");
class Square extends Rectango
{
public function Square($name, $width,$height){
    parent::Rectango($name, $width,$height);
}
}
