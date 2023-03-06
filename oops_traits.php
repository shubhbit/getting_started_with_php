<?php

// php allows to inherit only from one class, to solve this problem traits can be used
// let's explore some examples


trait message1 {
    public function msg1(){
        print("message-1\n");
    }
}

trait message2 {
    public function msg2(){
        print("message-2\n");
    }
}

class Hello {
    use message1, message2;
    public function hello(){
        print("hello world!\n");
    }
}

$hello  = new Hello();
$hello->msg1();
$hello->msg2();
$hello->hello();
?>