<?php
class Fruit {
    final public function intro(){
        print("parent introduction\n");
    }
}

class Strawberry extends Fruit{
    public function intro(){
        print("child over-riden method\n");
    }
}

$strawberry = new Strawberry();
$strawberry->intro();
?>