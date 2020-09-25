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
$isArticleExist = '';

if (checkID($_GET['id'])) {
    $articleData = getArticleByID($_GET['id']);
    // verification for non-existent id
    ($articleData === null) ? $isArticleExist = false : $isArticleExist = true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && $isArticleExist === true) {
    $inputParameters['title'] = trim($_POST['title']);
    $inputParameters['text'] = trim($_POST['text']);
    $inputParameters['id_article'] = $_GET['id'];

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
<? if (!$isArticleExist) : ?>
    <div>Статья не найдена!</div>
<? else: ?>
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
<? endif; ?>

<hr>
<a href="index.php">На главную</a>
</body>
</html>
