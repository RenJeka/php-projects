<?php

include_once ('core/db.php');

/**
 * Getting all messages from DB
 * @return array
 */
function messagesAll(): array {
    $sql = "SELECT * from messages order by dt_add desc ";
    $query = dbPrepareQuery($sql);
    return $query->fetchAll();
}

function messagesOne(int $id){
    $sql = "SELECT * FROM messages WHERE id_message=:id";
    $query = dbPrepareQuery($sql, ['id' => $id]);
    return $query->fetch();
}

function messagesAdd(array $fields): bool{
    $sql = "INSERT messages(name, text) VALUES (:name, :text)";
    dbPrepareQuery($sql, $fields);
    return true;
}

function messagesValidate(array $fields) : array {
    $errors = []; // возвращаемый массив с ошибками
    $textLength = mb_strlen($fields['text'], 'UTF-8');

    if (mb_strlen($fields['name'], 'UTF-8') < 2) {
        $errors[] = "Имя должно быть не короче 2-х символов";
    }

    if ( $textLength < 10 || $textLength > 140) {
        $errors[] = "Текст должен быть от 10 до 140 символов в длину.";
    }

    return $errors;
}

/**
 * Минимальная защита от XSS атак
 * @param array $fields Массив со значениями полей ввода
 * @return array Обработанный массив со значениями полей ввода для предотвращения XSS атак
 */
function messagesPrepareFields(array $fields) : array {
    $fields["name"] = htmlspecialchars($fields["name"]);
    $fields["text"] = htmlspecialchars($fields["text"]);
    return $fields;
}