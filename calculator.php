<?php

$first_number = (float)htmlspecialchars($_POST["first_number"]);
$second_number = (float)htmlspecialchars($_POST["second_number"]);

$operation = htmlspecialchars($_POST["operation"]);

$result = null;
switch($operation){
    case "+":
        $result = $first_number + $second_number;
        break;
    case "-":
        $result = $first_number - $second_number;
        break;
    case "*":
        $result = $first_number * $second_number;
        break;
    case "/":
        $result = $first_number / $second_number;
        break;
}

echo $result;