<!-- final keyword is used to prevent a class from getting inherited and 
a method to be overridden -->

<?php
final class Fruit {
    public function intro(){
        print("intro\n");
    }
}

class Strawberry extends Fruit {
    public function msg(){
        print("msg\n");
    }
}
?>