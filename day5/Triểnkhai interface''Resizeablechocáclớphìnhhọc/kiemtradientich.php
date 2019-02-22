<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 14:01 CH
 */
include_once ("Circle.php");
include_once ("Square.php");
include_once ("Rectangle.php");

$tron = new Circle(3);
echo "Dien tich hinh tron la:"." ".$tron->getArea();
echo "<br>";
$rad = rand(1,10);
echo "Dien tich hinh tron sau khi tang la:"." ".$tron->resize($rad);
echo "<br>";

$chunhat = new Rectangle(4,5);
echo "Dien tich HCN la:"." ".$chunhat->getArea();
echo "<br>";
$rad = rand(1,10);
echo "Dien tich hinh tron sau khi tang la:"." ".$chunhat->resize($rad);
echo "<br>";


$vuong = new Square(4);
echo "Dien tich hinh vuong la:"." ".$vuong->getArea();
echo "<br>";
$rad = rand(1,10);
echo "Dien tich hinh tron sau khi tang la:"." ".$vuong->resize($rad);
echo "<br>";