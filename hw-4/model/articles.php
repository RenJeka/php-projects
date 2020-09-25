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

/**
 * return article (array of article's data from DB)
 * experiment for strict type
 * @param int $id id of requested article
 * @return array|null
 */
function getArticleByID(string $id): ?array {

    $sql = "SELECT * FROM articles WHERE id_article = :id";
    $preparedQuery = dbPrepareQuery($sql, ['id' => (int)$id]);
    $article = $preparedQuery->fetch();
    return is_array($article) ? $article : null;
}

/**
 * Input new article to DataBase through input mask parameters to sql query
 * @param array $inputMaskParameters parameters, that will inject to mask-place in SQL query
 * @return bool true, if sql-query has completed
 */
function addNewArticle(array $inputMaskParameters): bool{
    $sql = "INSERT articles (title, text, id_category) VALUES (:title, :text, :id_category)";
    dbPrepareQuery($sql, $inputMaskParameters);
    return true;
}

function updateArticle(array $inputMaskParameters): bool{
    $sql = "UPDATE articles
            SET id_category=:id_category,
                title=:title,
                text=:text
            WHERE id_article=:id_article";
    dbPrepareQuery($sql, $inputMaskParameters);
    return true;
}

function deleteArticle(int $id_article): bool{
    $sql = "DELETE FROM articles WHERE id_article=:id_article";
    dbPrepareQuery($sql, ['id_article' => (int)$id_article]);
    return true;
}

function getAllCategories(): array {
    $sql = "SELECT * FROM caterories ORDER BY id_category";
    $preparedQuery = dbPrepareQuery($sql);
    return $preparedQuery->fetchAll();

}

function getCategoryByID(int $id): array{
    $sql = "SELECT * FROM caterories WHERE id_category = :id";
    $preparedQuery = dbPrepareQuery($sql, ['id' => (int)$id]);
    return $preparedQuery->fetch();
}

 // TODO: Need to implement a validity check of ID articles(from User)
function checkID(string $id){
    $pattern = "/^[1-9]+\d*/";
}

