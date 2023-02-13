<?php
class FirstPhpClass {
    var $title;
    var $price;

    function set_price($price){
        $this->price = $price;
    }

    function get_price(){
        print("price is: " . $this->price . "<br/>");
    }

    function set_title($title){
        $this->title = $title;
    }

    function get_title(){
        print("title is: ". $this->title . "<br/>");
    }
}
?>