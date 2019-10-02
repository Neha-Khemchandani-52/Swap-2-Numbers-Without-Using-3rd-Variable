<?php
/***
 * Description : Swapping two numbers without using any third variable in PHP
 * Date Added : 2nd October,2019
 * Added By : Neha Khemchandani
 */

$num1 =25;
$num2 = 50;

echo "Values of number1 and number2 before swapping : num1 = ".$num1." and num2 = " .$num2;
echo "</br>";

$num1 = $num1+$num2;  // $num1 = 25+50=75
$num2 = $num1-$num2;   // $num2 = 75-50 =25
$num1 = $num1-$num2;  // $num1 = 75-25 = 50

echo "Values of number1 and number2 after swapping : num1 = ".$num1." and num2 = " .$num2;
?>
