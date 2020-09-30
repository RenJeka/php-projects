<?php
include_once "connect.php";

/**
 * get all articles from DB
 * @return array
 */
function getAllPosts(): array{
    $sql = "SELECT * FROM posts ";
    $preparedQuery = dbPrepareQuery($sql);
    return $preparedQuery->fetchAll();
}

/**
 * return article (array of article's data from DB)
 * experiment for strict type
 * @param string $id id of requested article
 * @return array|null
 */
function getPostByID(string $id): ?array {

    $sql = "SELECT * FROM posts WHERE id_post = :id";
    $preparedQuery = dbPrepareQuery($sql, ['id' => (int)$id]);
    $article = $preparedQuery->fetch();
    return is_array($article) ? $article : null;
}

/**
 * Input new article to DataBase through input mask parameters to sql query
 * @param array $inputMaskParameters parameters, that will inject to mask-place in SQL query
 * @return bool true, if sql-query has completed
 */
function addNewPost(array $inputMaskParameters): bool{
    $sql = "INSERT INTO posts (title, body) VALUES (:title, :body)";
    dbPrepareQuery($sql, $inputMaskParameters);
    return true;
}

function editPost(array $inputMaskParameters): bool{
    $sql = "UPDATE posts
            SET title=:title,
                body=:body
            WHERE id_post=:id_post";
    dbPrepareQuery($sql, $inputMaskParameters);
    return true;
}

function deletePost(int $id_article): bool{
    $sql = "DELETE FROM posts WHERE id_post=:id_post";
    dbPrepareQuery($sql, ['id_article' => (int)$id_article]);
    return true;
}
