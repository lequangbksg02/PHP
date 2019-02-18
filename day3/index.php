<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/02/2019
 * Time: 22:38 CH
 */
include("class_lib.php");
include("StopWatch/class_lib.php");
include("Xây dựng lớp Fan/XDFan.php");


/*$Obj = new StopWatch();
echo $Obj->get_startTime();
$Obj->stop();
echo $Obj->getElapsedTime();*/


$objFan = new XDFan();
$objFan->set_on(false);
$objFan->toString();
echo "<br>";
$objFan1 = new XDFan();
$objFan1->set_on(true);
$objFan1->set_radius(10);
$objFan1->set_color("yelow");
$objFan1->toString();
