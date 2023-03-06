<?php
class Hello {
    static public function static_function() {
        print("this is a static function\n");
    }
    public function hello(){
        self::static_function();
        print("hello function\n");
    }
}

class Child extends Hello {
    public function child_method() {
        parent::static_function();
        print("child method\n");
    }
}

$hello = new Hello();
$hello->hello();
Hello::static_function();

$child = new Child();
$child->child_method();
?>