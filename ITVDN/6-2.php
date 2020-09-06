<?php
// Провести различные изменения известных типов данных, со своими произвольными значениями.
$myInt = 33;
$myString = "some string";
$myArr = [11, 55, 33, 747];
$myFloat = 34.22;

$myInt++;
$myString .= " some text";
array_push($myArr, 522);
$myFloat += 1.01;

var_dump($myInt);
echo "<br/>";

var_dump($myString);
echo "<br/>";

var_dump($myArr);
echo "<br/>";

var_dump($myFloat);
echo "<br/>";



