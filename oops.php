<?php
class Book {
    var $title;
    var $price;

    function set_price($price){
        $this->price = $price;
    }

    function get_price(){
        print("price is: " . $this->price . "\n");
    }

    function set_title($title){
        $this->title = $title;
    }

    function get_title(){
        print("title is: ". $this->title . "\n");
    }
}

$maths = new Book;
$physics = new Book;
$chemistry = new Book;

$maths->set_price(500);
$maths->set_title("Intro to Math");

$physics->set_title("Physics by examples");
$physics->set_price(600);

$chemistry->set_title("reactions of chemistry");
$chemistry->set_price(1000);

$physics->get_title();
$physics->get_price();

$maths->get_title();
$maths->get_price();

$chemistry->get_title();
$chemistry->get_price();
?>