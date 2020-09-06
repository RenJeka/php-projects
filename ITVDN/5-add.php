<?php
$var1 = "some text";


/**
 * @param string $var Переменная, тип которой нужно проверить.
 */
function getMyType(string $var)
{
     var_dump($var);
}

getMyType($var1);