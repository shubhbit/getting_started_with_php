<?php
class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro(){
        print("fruit's name is $this->name and color is $this->color\n");
    }
}

class Strawberry extends Fruit {
    public $weight;

    public function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function intro(){
        print("fruit's name is $this->name, color is $this->color weight is $this->weight\n");
    }
}

$strawberry = new Strawberry("Strawberry", "Red", "100g");
$strawberry->intro();
?>