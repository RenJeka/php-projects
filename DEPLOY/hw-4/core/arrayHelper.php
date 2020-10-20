<?php

/**
 * Делает срез целевого массива по тем полям, которые мы указали в массиве $fields и возвращает этот "срез"
 * @param array $target - одномерный ассоциативный массив
 * @param array $fields — обычный массив, список строк с полями
 * @example
 * $t = [a=>1 , b=>2 ..... c => 10, d=> 20 ]
 * $f = [a, c]
 * $returnArray = [a=> 1, c=>10]
 */
function extractFieldsFromArray(array $target, array $fields): array {
    $res = [];

    foreach ($fields as $field) {

        if (array_key_exists($field, $target)) {
            $res[$field] = trim($target[$field]);
        } else{
            throw new Exception("Target array hasn't key '$field'");
        }
    }
    return  $res;
}