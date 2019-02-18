<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15/02/2019
 * Time: 14:40 CH
 */
include_once ("Point2D.php");
class Point3D extends Point2D
{
    private $z;
    public function Point3D($x, $y, $z){
        parent::Point2D($x, $y);
        $this->z = $z;
    }

    public function get_Z(){
        return $this->z;
    }
    public function set_Z($z){
        $this->z = $z;
    }

    public function set_XYZ($x,$y,$z){
        parent::set_XY($x,$y);
        $this->z = $z;
    }

    public function get_XYZ(){
        $arrayXYZ = parent::get_XY();
        array_push($arrayXYZ,$this->z);
        return $arrayXYZ;
    }

    public function toString(){
        echo  "Toa Do XYZ la: (" . $this->get_X() . "," . $this->get_Y() . "," . $this->z . ")";

    }


}
?>