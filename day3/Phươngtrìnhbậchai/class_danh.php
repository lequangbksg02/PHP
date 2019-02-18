<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 14/02/2019
 * Time: 11:35 SA
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

    public function set_a($new_a)
    {
        $this->a = $new_a;
    }

    public function get_a()
    {
        return $this->a;
    }

    public function set_b($new_b)
    {
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

    public function getDiscriminant()
    {
        return pow($this->b, 2) - 4 * $this->a * $this->c;
    }
    public  function getRoot1() {
        return (-$this->b+sqrt($this->getDiscriminant()))/2*$this->a;
    }
    public  function getRoot2()
    {
        return (-$this->b - sqrt($this->getDiscriminant())) / 2 * $this->a;
    }
    public  function getRoot()
    {
        try {
            echo "Delta = " . $this->getDiscriminant() . "<br/>";
            if ($this->getDiscriminant() < 0) {
                throw new Exception('Phương trình vô nghiệm');
            };

            if ($this->getDiscriminant() == 0) {
                return "Phương trình có nghiệm kép " . $this->getRoot1();
            } else {
                return "Phương trình có 2 nghiệm " . $this->getRoot1() . " và " . $this->getRoot2();
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
$tinh = new QuadraticEquation(1,-3,2);

echo $tinh->getRoot();