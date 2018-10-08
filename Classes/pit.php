<?php
/**
 * Created by IntelliJ IDEA.
 * User: Florian
 * Date: 17.09.2018
 * Time: 13:20
 */
ini_set('max_execution_time', 60);
require_once "Classes/product.php";
class Pit extends Product {
    private $equipment = ["Hamster training gloves", "Hamster punching sack"];
    function __construct($length, $price)
    {
        $this->length = $length;
        $this->price = $price;
    }

    function outputProductInfo() {
        return "Our Domain ‘The Pit’ is the basic choice of real estate for a hamster owner. It features a length of " . $this->length . "cm. It is available for the low price of EUR " . $this->price . ",-";
    }

    function getSpecialEquipment() {
        return $this->equipment;
    }

    function calculateArea() {
        return $this->length * $this->length * (2 + 2 * sqrt(2));
    }
}
?>
