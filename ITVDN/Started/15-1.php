<?php
$names = ["Яковленко","Михаил", "Петрович"];

sort($names, SORT_STRING);

echo implode("", $names);