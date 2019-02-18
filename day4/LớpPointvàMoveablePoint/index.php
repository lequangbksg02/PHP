<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 16:49 CH
 */

include_once ("MoveablePoint.php");

$objMoveablePoint = new MoveablePoint(3,12,8,30);
$objMoveablePoint->toString();
echo "<br>";
$objMoveablePoint->move();
$objMoveablePoint->toString();