<?php
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        print("this fruit's name is $this->name and color is $this->color\n");
    }
}

class Strawberry extends Fruit {
    public function message(){
        print("Am I a fruit or a berry?\n");
        $this->intro();
    }
}

$strawberry =  new Strawberry("Strawberry", "Red");
// $strawberry->intro();
$strawberry->message();
?>