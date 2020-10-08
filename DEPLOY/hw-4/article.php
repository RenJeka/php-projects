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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статья — <?= $article['title'] ?> </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">

    <style>
        * {
            font-size: 18px;
        }


        .title-article__date {
            font-size: 18px;
            color: gray;
        }

        .title-article__category {
            font-style: italic;
            font-size: 16px;
            color: #4e4e4e;
        }

        @media screen and (max-width: 450px) {
            .btn-edit{
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row px-3">
        <? if ($isArticleExist): ?>
            <div class="article">
                <h1 class="display-4 text-center">
                    <?= $article['title'] ?>
                    <span class="title-article__date">
                        ( <?= substr($article['addDate'], 0, 10) ?> )
                    </span>
                    <span class="title-article__category">
                        <?= $articleCategory['categoryName'] ?>
                    </span>
                </h1>
                <div>
                    <pre class="pl-2">
                        <?= $article['text'] ?>
                    </pre>
                </div>
                <hr>

                <div class="my-2">
                    <a 
                        href="edit.php?id=<?= $article['id_article'] ?>" 
                        class="btn-edit btn btn-outline-secondary mr-4"
                    >Редактировать статью</a>
                    <a 
                        href="delete.php?id=<?= $article['id_article'] ?>" 
                        class="btn btn-danger btn-sm"
                    >Удалить статью</a>
                </div>
            </div>
        <? else: ?>
            <div class="e404">
                <h1>Страница не найдена!</h1>
            </div>
        <? endif; ?>
    
    <div class="mt-3">
        <a href="index.php" class="btn btn-primary btn-sm">На главную</a>
    </div>
    </div>
</div>
</body>
</html>
