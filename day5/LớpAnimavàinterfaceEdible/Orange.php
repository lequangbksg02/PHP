<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 11:07 SA
 */
include_once("Fruit.php");
class Orange extends Fruit
{
    public function howToEat()
    {
       return "Orange coutd be juiced";
    }
}