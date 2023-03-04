<?php
class Fruit {
    const MESSAGE = "Thank you for visiting us!";
}

print(Fruit::MESSAGE);
?>

<?php
class Sample{
    const MESSAGE = "Thanks bro for visiting our site!";
    public function message(){
        print(self::MESSAGE);
    }
}

$fruit = new Sample();
$fruit->message();
?>