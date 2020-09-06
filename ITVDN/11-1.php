<?php


$a = 1;
$b = 6;

// 1 = 0001;
// 6 = 0110

/*
  ---AND---
    0001
    0110
    ----
    0000 = 0
*/
echo $res = $a & $b;
echo "<br/>";

/*
  ---OR---
    0001
    0110
    ----
    0111 = 7
*/
echo $res = $a | $b;
echo "<br/>";

/*
  ---XOR---
    0001
    0110
    ----
    1000 = 8
*/
echo $res = $a ^ $b;
echo "<br/>";

/*
  ---NOT---
    0001    = 1110
    0110    = 1001
    ----
*/
echo ~$a;
echo "<br/>";
echo ~$b;
