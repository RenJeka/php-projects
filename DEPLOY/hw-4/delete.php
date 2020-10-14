<?php
include_once "model/articles.php";

$isDeleted = false;
$errors = array();
$articleId = (int)($_GET['id'] ?? '');

if ($articleId > 0) {
    $isDeleted = deleteArticle($articleId);
} else {
    array_push($errors, "Неправильный ID! Попробуйте удалить статью снова.");
}

include "views/v_delete.php";
