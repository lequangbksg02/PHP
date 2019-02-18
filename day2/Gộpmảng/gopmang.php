<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/02/2019
 * Time: 19:53 CH
 */


$mang1 = array(1,4,0,7,9);
$mang2 = array(8,5,2,6,3);
$mang3 = array();
for($i=0;$i<count($mang1);$i++){
    array_push($mang3,$mang1[$i]);
}
for($j=0;$j<count($mang2);$j++){
    array_push($mang3,$mang2[$j]);
}
print_r($mang3);
?>
