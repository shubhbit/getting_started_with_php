<?php
class Hello {
    static public $val = 90;
    public function hello(){
        print("hello " . self::$val);
    }
}

class Child extends Hello {
    public function child_method() {
        print("child " . parent::$val);
    }
}

print("outside access of static properties: " . Hello::$val);
$child = new Child();
$child->child_method();
?>