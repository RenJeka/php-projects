<?php
include_once "model/articles.php";
$db = getDBInstance();
$article = getArticleByID($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Статья — <?=$article['title']?> </title>
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
<div class="content">
<!--    --><?//if ($hasPost): ?>
        <div class="article">
            <h1>
                <?=$article['title']?>
                <span class="title-article-date">
                    ( <?= substr($article['addDate'],0,10)?> )
                </span>
            </h1>
            <div><?=$article['text']?></div>
            <hr>
            <p><a href="edit.php?id=<?=$id?>">Edit</a></p>
            <p><a href="delete.php?id=<?=$id?>">Remove</a></p>

        </div>
<!--    --><?//else: ?>
<!--        <div class="e404">-->
<!--            <h1>Страница не найдена!</h1>-->
<!--        </div>-->
<!--    --><?//endif;?>
</div>
<hr>
<a href="index.php">Move to main page</a>
</body>
</html>
