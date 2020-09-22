<?php
include_once "GeometricFigure.php";

$mySquare = new GeometricFigure();
$mySquare->name = 'Square';
$mySquare->width =12;
$mySquare->height =12;

var_dump($mySquare);
echo "<br/>";
$mySquare->transform();
var_dump($mySquare);
echo "<br/>";


$myRectangle = new GeometricFigure();
$myRectangle->name = 'Rectangle';
$myRectangle->width =110;
$myRectangle->height =134;

var_dump($myRectangle);
echo "<br/>";
$myRectangle->transform(100);
var_dump($myRectangle);
echo "<br/>";



$myRhombus = new GeometricFigure();
$myRhombus->name = 'Rhombus';
$myRhombus->width =2;
$myRhombus->height =177;

var_dump($myRhombus);
echo "<br/>";
$myRhombus->transform(300);
var_dump($myRhombus);
echo "<br/>";

