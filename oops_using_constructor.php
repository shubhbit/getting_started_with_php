<?php
class Book {
    var $title;
    var $price;
    function __construct($va1, $va2){
        $this->title =  $va1;
        $this->price = $va2;
    }

    function get_value(){
        print("title of book:  " . $this->title . "\n");
        print("price of book:  " . $this->price . "\n");

    }
}

$physics = new Book("Wonders of Physics", 500);
$chemistry = new Book("Chemical Reactions", 1000);
$maths = new Book("Mathematical models", 600);

$physics->get_value();
$chemistry->get_value();
$maths->get_value();
?>

