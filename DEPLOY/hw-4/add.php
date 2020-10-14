<?php
include_once "model/db.php";
include_once "model/articles.php";
include_once "model/categories.php";

$inputParameters = [
    'title' => '',
    'id_category' => '',
    'text' => ''
];
$err = '';
$categories = getAllCategories();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $inputParameters['title'] = trim($_POST['title']);
    $inputParameters['text'] = trim($_POST['text']);
    $inputParameters['imageUrl'] = trim($_POST['imageUrl']);

    if (array_key_exists('id_category', $_POST)) {
        $inputParameters['id_category'] = trim($_POST['id_category']);
    }

    if ($inputParameters['title'] === '' || $inputParameters['text'] === '' || $inputParameters['id_category'] === '') {
        $err = 'Заполните все поля!';
    } else {
        addNewArticle($inputParameters);
        $id = getLastInsertedID();
        header("Location: article.php?id=$id");
        exit();
    }
}

include "views/v_add.php";
