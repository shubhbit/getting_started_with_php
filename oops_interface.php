<?php
interface Animal {
    public function make_sound();
}

class Dog implements Animal {
    public function make_sound(){
        print("bark\n");
    }
}

class Cat implements Animal {
    public function make_sound(){
        print("meow\n");
    }
}

$cat = new Cat();
$dog = new Dog();
$cat->make_sound();
$dog->make_sound();
?>