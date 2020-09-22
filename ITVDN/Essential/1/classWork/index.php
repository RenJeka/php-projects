<?php
include 'myFirstClass.php';
include 'Car.php';


$myObject = new myFirstClass();
$myObject->myfield1 = "some value";

$carBmw = new Car();
$carBmw->brand = 'BMW';
$carBmw->color = 'silver';
$carBmw->maxSpeed = 380;
$carBmw->move(25);




//$arr = [
//    $myObject,
//    $honda
//];


echo "<pre>";
var_dump($carBmw);
echo "</pre>";
echo "<br/>";
print_r($carBmw);

echo "<hr/>";
$carMitsubishi = new Car();
echo "<pre>";
print_r($carMitsubishi);
echo "</pre>";
echo "<br/>";
$carMitsubishi->move(31);
echo "<pre>";
print_r($carMitsubishi);
echo "</pre>";
echo "<br/>";
$carMitsubishi->stop();
echo "<pre>";
print_r($carMitsubishi);
echo "</pre>";
echo "<br/>";