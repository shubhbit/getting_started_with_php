<?php

$num1 = 9;
$num2 = 4;

// below are examples of arithmetic operators
print($num1+$num2);
print($num1-$num2);
print($num1*$num2);
print($num1/$num2);
print($num1%$num2);
print($num1++);
print($num2--);

// below are examples of comparison operators
if ($num1 == $num2) {
    print("equal");
    } 
if ($num1 != $num2) {
    print("not equal");
}

if ($num1 > $num2) {
    print("first greater");
}

if ($num1 < $num2) {
    print("second greater");
}

// below are logical operator examples
if (TRUE and TRUE){
    print("logical and");
}
if (TRUE or FALSE){
    print("logical or");
}
if (!FALSE){
    print("logical not");
}
if (TRUE && TRUE){
    print("logical and");
}
if (TRUE || FALSE){
    print("logical or");
}

// below are examples of assignment operators
$num3 = 9;
print($num3);
$num3 += 1;
print($num3);
$num3 -= 1;
print($num3);
?>