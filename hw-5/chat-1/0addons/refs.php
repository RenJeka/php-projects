<?php

$a = 1;

function b(&$a){
    $a++;
}

b($a);
echo $a;