<?php
// pass by value

function addSix($num){
    $num += 6;
    print("increased number by 6: $num\n");
}

$num = 5;
print("pass by value demo\n");
print("original num before function call: $num\n");
addSix($num);
print("original num after function call: $num\n");

// pass by reference
function addFive(&$num2){
    $num2 += 5;
    print("number increased by 5: $num2\n");
}
$num2 = 2;
print("pass by reference demo\n");
print("original num before function call: $num2\n");
// putting ampersand in front of argument while calling 
// function will send argument with reference
addFive($num2);
print("original num after function call: $num2\n");


// default value to arguments

print("function to demo default value..\n");

function functionDefaultArgument($num=NULL){
    if ($num == NULL){
        print("no value passed while calling function, default being used\n");
    }
    else{
        print("value passed is: $num, default is not being used\n");
    }
}
functionDefaultArgument();
functionDefaultArgument(10);

// dynamic function call

$func = "functionDefaultArgument";
$func();
?>