<?php
/**
 * Created by PhpStorm.
 * User: phanluan
 * Date: 01/11/2018
 * Time: 22:39
 */
namespace Model;

class Order
{
    public $thitbachi;
    public $thitsuon;
    public $thitcay;
    public $thitmeo;

    public function __construct($thitbachi, $thitsuon, $thitcay, $thitmeo)
    {
        $this->thitbachi = $thitbachi;
        $this->thitsuon = $thitsuon;
        $this->thitcay = $thitcay;
        $this->thitmeo = $thitmeo;
    }
}