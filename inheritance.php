<?php
class Book {
    var $title;
    var $price;
    function __construct($val1, $val2){
        $this->title = $val1;
        $this->price = $val2;
    }

    function display_info(){
        print("book title: " . $this->title . "\n");
        print("book price: " . $this->price . "\n");
    }
}

class Novel extends Book {
    var $publisher;
    function set_publisher($pub){
        $this->publisher = $pub;
    }
    function get_publisher(){
        print("publisher: " . $this->publisher . "\n");
    }
}
$physics = new Novel("experimental physics", 560);
$physics->set_publisher("S Chand");
$physics->display_info();
$physics->get_publisher();
?>