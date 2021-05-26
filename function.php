<?php

function myCalculator($num01, $oper, $num02){
  $sum;
  switch($oper){
    case "add";
    $sum = $num01 + $num02;
    break;
    case "sub";
    $sum = $num01 - $num02;
    break;
    case "multiply";
    $sum = $num01 * $num02;
    break;
    case "division";
    $sum = $num01 / $num02;
    break;
    default:
    $sum = "Please do something";
    break;
  }
  return $sum;
}

$num01 = $_GET["num01"];
$oper = $_GET["oper"];
$num02 = $_GET["num02"];

echo "value:" . myCalculator($num01, $oper, $num02);

?>