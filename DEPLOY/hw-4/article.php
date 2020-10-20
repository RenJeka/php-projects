<?php
include_once "model/articles.php";
include_once "model/categories.php";
$db = getDBInstance();
$id_article = $_GET['id'] ?? '';
$article = getArticleByID($id_article);
$isArticleExist = $article !== null;

if ($isArticleExist) {
    $articleCategory = getCategoryByID($article['id_category']);
}

include "views/v_article.php";

