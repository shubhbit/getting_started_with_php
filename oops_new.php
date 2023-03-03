<?php

class Fruit {
    var $name;
    var $color;

    function set_name($name){
        $this->name = $name;
    }

    function get_name(){
        return $this->name;
    }

}

$apple = new Fruit();
$apple->set_name("Apple");
print($apple->get_name())

?>