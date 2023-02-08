<?php
$num=5;

// for loop
for ($i=0; $i<=$num;$i++){
    print("for loop $i");
}

// while loop

while ($num < 10){
    print("while loop: $num");
    $num++;
}

// do while loop

do {
    print("do...while loop: $num");
    $num++;
}
while ($num < 20);

// foreach

$ar = array(1,2,3,4,5);

foreach($ar as $val){
    if ($val ==1){
        continue;
    }
    if ($val ==3){
        break;
    }
    print("foreach loop: $val");
}



?>