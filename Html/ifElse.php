<?php

//CONTROL STRUCTURES - KONTROL YAPILARI
//IF, ELSE, ELSE IF, SWITCH

$gender = "Female";
$age = 19;
if ($gender == "Male" && $age > 18) {
    echo "You can enter";
}
else if ($gender == "Male" && $age <= 18) {
    echo "Male but age 18-";
}
else if ($gender != "Male") {
    echo "Men Only!";
}
else {
    echo "Something wrong!";
}


$renk = "yellow";

switch ($renk) { //switch de tek koşul sağlanır.
    case "black": //renk black ise...
        echo "Black";
        break;

    case "orange":
        echo "Orange";
        break;

    case "yellow":
        echo "Yellow";
        break;

    default:
        echo "false";
        break;
}
//e.g 2

$number1 = 50;
$number2 = 40;
$process = "multiply";

switch ($process) {
    case "plus":
        $result = $number1 + $number2;
        echo "Result: $result";
        break;

    case "minus":
        $result = $number1 - $number2;
        echo "Result: $result";
        break;

    default:
        echo "Something Wrong!";
        break;

}

?>