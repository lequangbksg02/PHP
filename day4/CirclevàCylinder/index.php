<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 11:23 SA
 */
include_once ("Cylinder.php");

$objcircle = new circle(10,'blue');
$objcircle->toString();
echo "<br>";
$objcircle->dientich();
echo"<br>";

$objCyliner = new Cylinder(5,'blue',6);
$objCyliner->toString();
echo "<br>";
echo "The tich hinh tru";
echo $objCyliner->thetich();


?>