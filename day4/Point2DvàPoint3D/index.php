<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 14:24 CH
 */
include_once ("Point3D.php");

$objPoint2D = new Point2D(1,2);
//print_r($objPoint2D->get_XY());
$objPoint2D->toString();
echo "<br>";

$objPoint3D = new Point3D(0,0,5);
$objPoint3D->toString();
//print_r($objPoint3D ->get_XYZ());

/*$mang = array();
for($i = 0; $i < 10 ; $i++){
    $x = rand(0,40);
    $y = rand(20,50);
    $z = rand(10,80);
    $objTam = new Point3D($x, $y, $z);
    array_push($mang,$objTam);
    echo "<br>";
    $mang[$i]->toString();
}*/



?>