<?php
/**
 * Created by IntelliJ IDEA.
 * User: Florian
 * Date: 17.09.2018
 * Time: 13:20
 */
ini_set('max_execution_time', 60);
require_once "Classes/product.php";
class Room extends Product {
    private $width;
    private $height;
    private $equipment = ["none"];

    function __construct($length, $width, $height, $price)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
        $this->price = $price;
    }

    function outputProductInfo() {
        return "Our Domain ‘The Room’ is the basic choice of real estate for a hamster owner. It features a length of " . $this->length . "cm, a width of " . $this->width . "cm and a height of " . $this->height . " cm. It is available for the low price of EUR " . $this->price . ",-";
    }

    function getSpecialEquipment() {
        return $this->equipment;
    }

    function calculateArea() {
        return $this->length * $this->width;
    }
}
?>
