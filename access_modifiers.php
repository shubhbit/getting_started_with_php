<?php
class Fruit{
    public $name;
    protected $color;
    private $weight;
}

$apple = new Fruit();
$apple->name = "Apple";
// $apple->color = "Red"; // Error
// $apple->weight = "100"; // Error
?>