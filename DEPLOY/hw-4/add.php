<?php
include_once "core/db.php";
include_once "model/articles.php";
include_once "model/categories.php";
include_once "core/arrayHelper.php";

$validateErrors = [];
$categories = getAllCategories();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $inputParameters = extractFieldsFromArray($_POST, ['title', 'text', 'imageUrl', 'id_category']);
    $validateErrors = articlesValidate($inputParameters);
    $inputParameters = articlesPrepareFields($inputParameters);

    if (empty($validateErrors)) {
        addNewArticle($inputParameters);
        $id = getLastInsertedID();
        header("Location: article.php?id=$id");
        exit();
    }

} else {
    $inputParameters = [
        'title' => '',
        'imageUrl' => '',
        'id_category' => '',
        'text' => ''
    ];
}

include "views/v_add.php";
