<?php
abstract class Car {
    public $name;
    public function __construct($name){
        $this->name = $name;
    }
    abstract public function intro();
}

Class Audi extends Car {
    public function intro(){
        print("this is Audi car! name is $this->name\n");
    }
}

class Mercedes extends Car {
    public function intro(){
        print("this is Mercedes car! name is $this->name\n");
    }
}

$audi = new Audi("Q7");
$audi->intro();
$mercedes = new Mercedes("G-Wagon");
$mercedes->intro();
?>