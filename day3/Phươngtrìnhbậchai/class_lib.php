<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14/02/2019
 * Time: 9:02 SA
 */
class  quadraticEquation
{
    private $a;
    private $b;
    private $c;

    public function _construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function set_a($new_a){
        $this->a = $new_a;
    }
    public function get_a(){
        return $this->a;
    }
    public function set_b($new_b){
        $this->b = $new_b;
    }
    public function get_b()
    {
        return $this->b;
    }
    public function set_c($new_c)
    {
        $this->c = $new_c;
    }
    public function get_c()
    {
        return $this->c;
    }
    public function getDiscriminant() {
        return pow($this->b,2) - 4*$this->a*$this->c;
    }
    public function getRoot1(){
        if($this->getDiscriminant() >0){
            return (-$this->b+sqrt($this->getDiscriminant()))/2*$this->a;
        }else if($this->getDiscriminant() ==0){
            return (-$this->b)/2*$this->a;
        }else
            return 0;
    }

    public function getRoot2(){
        if($this->getDiscriminant() >0){
            return (-$this->b-sqrt($this->getDiscriminant()))/2*$this->a;
        }else if($this->getDiscriminant() ==0){
            return (-$this->b)/2*$this->a;
        }else
            return 0;
    }
}
    $tinh = new quadraticEquation();
    $tinh->set_a(1);
    $tinh->set_b(2);
    $tinh->set_c(0);
    echo "<br>";
    echo $tinh->get_a();
    echo $tinh->get_b();
    echo $tinh->get_c();
    echo "<br>";
    echo $tinh->getDiscriminant();
    echo "<br>";
    echo $tinh->getRoot1();
    echo "<br>";;
    echo $tinh->getRoot2();
?>