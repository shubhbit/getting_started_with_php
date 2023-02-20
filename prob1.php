<?php
function equalize($ar) {
    $target = round(array_sum($ar)/count($ar));
    $steps = 0;
    foreach($ar as $val){
        $diff = abs($target - $val);
        $steps += $diff;
    }
    return $steps;
}

$ar = array(1,3,2,5,6);
print(equalize($ar));
$ar2 = array(3,3,3);
print(equalize($ar2));
?>

