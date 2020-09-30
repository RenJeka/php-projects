<?php

include_once "model/articles.php";
$articles = getAllArticles();

?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Небольшой блог</title>
        <style>
            * {
                font-size: 22px;
            }
            h1 {
                font-size: 32px;
            }
            h4 {
                font-size: 20px;
                margin: 10px 0;
            }
            .title-article-date{
                font-size: 16px;
                color: gray;
            }
        </style>
    </head>

    <body>
        <h1>Это мой блог на PHP, с помощью базы данных </h1>
        <a href="add.php">Добавить статью</a>
        <hr>
        <div class="articles">
            <? foreach ($articles as $article): ?>
                <div class="article">
                    <h4><?= $article['title'] ?>
                        <span class="title-article-date">( <?= substr($article['addDate'],
                                0,10)?> )</span></h4>
                    <a href="article.php?id=<?= $article['id_article'] ?>">Читать статью</a>
                </div>
            <? endforeach; ?>
        </div>
    </body>
</html>
