<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 13/02/2019
 * Time: 22:38 CH
 */
class person{
    var $name;
    var $ho;
    public $height;
    protected $social_insurance;
    private $pinn_number;
    protected $age;

    function _construct($person_name){
        $this->name = $person_name;
    }

    function set_name($new_name) {
        $this->name = $new_name;
    }

    function get_name() {
        return $this->name;
    }
    function get_pinn_number(){
        return $this->pinn_number;
    }
    function set_pinn_number($new_pinn_number){
        $this->pinn_number = $new_pinn_number;
    }
    function get_age(){
        return $this->age;
    }
    function set_age($new_age){
        $this->age = $new_age;
    }
    function set_tuoimoi(){
        $this->age +=1;
    }
    function set_ho($new_ho){
        $this->ho = $new_ho;
    }
    function get_ho(){
        return $this->ho;
    }

}
?>