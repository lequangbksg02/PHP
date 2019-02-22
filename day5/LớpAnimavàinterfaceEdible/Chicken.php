<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 11:15 SA
 */
include_once("Edible.php");
include_once("Animal.php");
class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
       return "Ga dich keu: qoac-qoac!";
    }

    public function howToEat()
    {
        return"ga dich mo thoc: bup-bup!";
    }
}