<?php
$arr = [4,2,6,8,3,9,15];
usort($arr, function ($element1, $element2){
    if ($element1 === $element2){
        return 0;
    }else {
        return $element1 > $element2 ? 1 : -1;
    }
});

foreach ($arr as $elem){
    echo $elem;
    echo "<br/>";
}
array_push($arr, count($arr));
echo "<hr/>";
foreach ($arr as $elem){
    echo $elem;
    echo "<br/>";
}
