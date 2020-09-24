<?php
include_once "model/db.php";

/**
 * get all articles from DB
 * @return array
 */
function getAllArticles(): array{
    $sql = "SELECT * FROM articles ORDER BY addDate DESC ";
    $preparedQuery = dbPrepareQuery($sql);
    return $preparedQuery->fetchAll();
}

function getArticleByID(int $id){
    $sql = "SELECT * FROM articles WHERE id_article = :id";
    $preparedQuery = dbPrepareQuery($sql, ['id' => (int)$id]);
    return $preparedQuery->fetch();
}

/**
 * Input new article to DataBase through input mask parameters to sql query
 * @param array $inputMaskParameters parameters, that will inject to mask-place in SQL query
 * @return bool true, if sql-query has completed
 */
function addNewArticle(array $inputMaskParameters): bool{
    $sql = "INSERT articles (title, text) VALUES (:title, :text)";
    dbPrepareQuery($sql, $inputMaskParameters);
    return true;
}