<?php

include_once "model/messages.php";
include_once "core/arr.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $fields = extractFieldsFromArray($_POST, ['name', 'text']);

    $validateErrors = messagesValidate($fields);
    $fields = messagesPrepareFields($fields);

    // Проверка на валидацию
    if (empty($validateErrors)) {
        messagesAdd($fields);
        header('Location:index.php');
        exit();
    }

} else{
    $fields = [
        'name' => '',
        'text' => ''
    ];
    $validateErrors = [];
}

include "views/v_add.php";
