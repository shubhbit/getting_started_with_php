<?php
abstract class Car {
    abstract public function intro($name): string;
}

class Audi extends Car {
    public function intro($name, $postfix="car"): string{
        return "this car is $name $postfix"  ;
    }
}

$audi = new Audi();
print($audi->intro("Q8"));
?>