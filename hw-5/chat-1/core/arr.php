<?php

// Вспомогательный модуль для работы с массивами
// Сюда можно добавлять различные общие функции для работы с массивами

/**
 * @param array $target - одномерный ассоциативный массив
 * @param array $fields — обычный массив, список строк с полями
 * @example
 * $t = [a=>1 , b=>2 ..... c => 10, d=> 20 ]
 * $f = [a, c]
 * $returnArray = [a=> 1, c=>10]
 */
function extractFieldsFromArray(array $target, array $fields): array{
    $res = [];

    foreach ($fields as $field) {
        $res[$field] = trim($target[$field]);
    }

    return  $res;
}