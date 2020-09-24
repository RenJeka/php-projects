<?php

include_once ('model/db.php');

/**
 * Getting all messages from DB
 * @return array
 */
function messagesAll(): array {
    $sql = "SELECT * from messages order by dt_add desc ";
    $query = dbPrepareQuery($sql);
    return $query->fetchAll();
}

function messagesAdd(array $fields): bool{
    $sql = "INSERT messages(name, text) VALUES (:name, :text)";
    dbPrepareQuery($sql, $fields);
    return true;

}