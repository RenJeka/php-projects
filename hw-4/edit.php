<?php
include_once "model/articles.php";

$inputParameters = [
    'id_article' => $_GET['id'],
    'title' => '',
    'id_category' => '',
    'text' => ''
];
$err = '';
$articleData = [];
$categories = getAllCategories();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $inputParameters['title'] = trim($_POST['title']);
    $inputParameters['text'] = trim($_POST['text']);
    $inputParameters['id_category'] = trim($_POST['id_category']);

    if (array_key_exists('id_category', $_POST)) {
        $inputParameters['id_category'] = trim($_POST['id_category']);
    }

    if ($inputParameters['title'] === '' || $inputParameters['text'] === '' || $inputParameters['id_category'] === '') {
        $err = 'Заполните все поля!';
    } else {
        updateArticle($inputParameters);
        header('Location:index.php');
        exit();
    }
} else {
    $articleData = getArticleByID((int)$_GET['id']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add article</title>
    <style>
        * {
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="form">

    <form method="post">
        <p>Заголовок статьи:
            <input
                    type="text"
                    name="title"
                    value=<?= $articleData['title'] ?>
            ></p>
        <p> Выберите категорию статьи:
            <select name="id_category">
                <? foreach ($categories as $category): ?>
                    <option
                            value=<?= $category['id_category'] ?>
                            <? if ($category['id_category'] === $articleData['id_category']): ?>
                            selected
                        <? endif; ?>
                    > <?= $category['categoryName'] ?> </option>
                <? endforeach; ?>
            </select>
        </p>
        <p>Текст статьи:
            <textarea name="text"><?= $articleData['text'] ?></textarea>
        </p>
        <p>
            <button type="submit">Изменить статью</button>
        </p>
        <p><?= $err ?></p>
    </form>
</div>
<hr>
<a href="index.php">На главную</a>
</body>
</html>
