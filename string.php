<?php
// literal string with single quote
$val = "Abc";
$lit_st = 'Hello $val';
print($lit_st);

// string with double quote
$double_quote = "Hello $val";
print($double_quote);

// string concatenation

$string_val = "Hello";
$string_value = "World!";
print($string_val . " " . $string_value);

print("length of string2: " . strlen($string_value));
print(strpos("hello world", "world"))
?>