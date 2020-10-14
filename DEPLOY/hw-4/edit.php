<?php
include_once "model/articles.php";
include_once "model/categories.php";

$inputParameters = [
    'id_article' => '',
    'title' => '',
    'id_category' => '',
    'text' => ''
];
$err = '';
$articleData = [];
$categories = getAllCategories();
$isArticleExist = false;


// there is 2 verification — "checkID()" AND returned value of "getArticleByID()"
if (checkID($_GET['id'])) {
    $articleData = getArticleByID($_GET['id']);
    // verification for non-existent id
    ($articleData === null) ? $isArticleExist = false : $isArticleExist = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isArticleExist === true) {
    $inputParameters['title'] = trim($_POST['title']);
    $inputParameters['text'] = trim($_POST['text']);
    $inputParameters['imageUrl'] = trim($_POST['imageUrl']);
    $inputParameters['id_article'] = $_GET['id'];
    $inputParameters['editDate'] = date("Y-m-d H:i:s");

    if (array_key_exists('id_category', $_POST)) {
        $inputParameters['id_category'] = trim($_POST['id_category']);
    }

    if ($inputParameters['title'] === '' || $inputParameters['text'] === '' || $inputParameters['id_category'] === '') {
        $err = 'Заполните все поля!';
    } else {
        updateArticle($inputParameters);
        header("Location:article.php?id=".$inputParameters['id_article']);
        exit();
    }
}

include "views/v_edit.php";