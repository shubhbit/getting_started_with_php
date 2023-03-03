<?php
class Fruit {
    public $name;
    public $color;
    function __construct($name){
        $this->name = $name;
    }
    function get_name(){
        print("name is $this->name");
    }
}
$apple = new Fruit("Apple");
$apple->get_name();
?>