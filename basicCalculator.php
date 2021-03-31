<?php
//creating a page that can perform basic calculation

//Definition of page
echo "<b> Basic Calculations In PHP</b>"."<br><br>";

//taking input from the user
$name = "Input from user";
echo "<b> $name </b>"."<br>";

$name1 = "First Input = 10";
$name2 = "Second Input= 3"."<br><br>";

echo $name1."<br>";
echo $name2."<br><br>";

//declare variables
$var1 = 10;
$var2 =  3 ;

//for addition of numbers
$addition = $var1 + $var2;
echo "Addition Operation =".$addition."<br><br>";

//for subtraction of numbers
$subtraction = $var1 - $var2;
echo "Subtraction Operation =".$subtraction."<br><br>";

//for Multiplication of numbers
$multiplication = $var1 * $var2;
echo "Multiplication Operation =".$multiplication."<br><br>";

//for Division of numbers
$division = $var1 / $var2;
echo "Division Operation =".$division."<br><br>";

//for Modulus of numbers
$modulus = $var1 % $var2;
echo "Modulus Operation =".$modulus."<br><br>";

?>