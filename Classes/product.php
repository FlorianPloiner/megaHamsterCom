<?php
/**
 * Created by IntelliJ IDEA.
 * User: Florian
 * Date: 01.10.2018
 * Time: 09:38
 */

abstract class Product implements productMethods{
    public $length;
    public $price;

    function __construct($length, $price)
    {
        $this->length = $length;
        $this->price = $price;
    }
}

interface productMethods {
    function outputProductInfo();
    function getSpecialEquipment();
    function calculateArea();
}