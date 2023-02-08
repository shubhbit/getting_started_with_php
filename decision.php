<?php
$num1 = 3;
$num2 = 5;

// examples of if..else  if...elseif...else
if ($num1 == $num2){
    print("both are equal");
}
elseif ($num1 <= $num2){
    print("num1 is less or equal to num2");
}
else {
    print("nothing..!");
}

// examples of switch cases

$day = readline("enter day: ");

switch ($day){
    case "SUN":
        print("SUNDAY entered");
        break;
    case "MON":
        print("MONDAY entered");
        break;
    case "TUE":
        print("TUESDAY entered");
        break;
    case "WED":
        print("WEDNESDAY entered");
        break;
    case "THU":
        print("THURSDAY entered");
        break;
    case "FRI":
        print("FRIDAY entered");
        break;
    case "SAT":
        print("SATURDAY entered");
        break;
    default:
        print("wrong entered..");
}


?>