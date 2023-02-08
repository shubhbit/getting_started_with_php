<?php
// numeric array
$num = array(1,2,3);
foreach($num as $val){
    print($val);
}

// associative array
$as_array = array("name" => "Shubham", "age" => 30, "address" => "Ald");
print("name: ".$as_array['name']);

// multi-dimensional array
$mult_ar = array("emp1" => array("name" => "Shubham", "age" => 30), "emp2" => array("name" => "Ankit", "age" => 45));

print("name: ".$mult_ar['emp1']['name']);
print("age: ".$mult_ar['emp1']['age']);
?>