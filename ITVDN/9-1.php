<?php
$myString = "A Looong some text";

if (strlen($myString) > 10) {
    $myString = substr($myString, 0, 10);
}
function setAG_Empty($string){
    $letters = ["A","a","g"];
    return str_replace($letters, "", $string);
}

echo setAG_Empty($myString);;
