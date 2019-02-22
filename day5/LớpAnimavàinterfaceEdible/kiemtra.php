<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18/02/2019
 * Time: 11:21 SA
 */

include_once("Tiger.php");
include_once ("Chicken.php");
include_once ("Fruit.php");
include_once ("Apple.php");
include_once ("Orange.php");


echo ("----Animal <br>");

$animals = array();
$animals[0] = new Tiger();
$animals[1] = new Chicken();





    foreach ($animals as $animalQuangdeptrai){
        echo $animalQuangdeptrai->makeSound();
        echo "<br>";
        if($animalQuangdeptrai instanceof Chicken){
            echo $animalQuangdeptrai->howToEat();
        }
    }



echo "<br>====================<br>";


$fruits = array();
$fruits[0] = new Orange();
$fruits[1] = new Apple();
$fruits[2] = new Chicken();

    foreach ($fruits as $fruitQuangle){
        echo $fruitQuangle-> howToEat();
        echo "<br>";
        if ($fruitQuangle instanceof Orange){
            echo $fruitQuangle->howToEat();
            echo "<br>";
        }
    }
