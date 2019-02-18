<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 9:54 SA
 */

include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectango.php');
include_once ('Square.php');


$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';
//
$cylinder = new Cylinder('vong tron',10,10);
echo 'Cylinder area: ' . $cylinder->calculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->calculatePerimeter() . '<br />';

//$rectangle = new Rectango('Vuong',10,20);
//echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';
//
$square = new Square('Square 01', 4 , 4);
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';
?>