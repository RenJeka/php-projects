<?php
include_once "model/articles.php";
$db = getDBInstance();
$article = getArticleByID($_GET['id']);
$articleCategory = getCategoryByID($article['id_category']);
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
        .title-article__date{
            font-size: 18px;
            color: gray;
        }

        .title-article__category{
            font-style: italic;
            font-size: 16px;
            color: #4e4e4e;
        }
    </style>
</head>
<body>
<div class="content">
<!--    --><?//if ($hasPost): ?>
        <div class="article">
            <h1>
                <?=$article['title']?>
                <span class="title-article__date">
                    ( <?= substr($article['addDate'],0,10)?> )
                </span>
                <span class="title-article__category">
                    <?=$articleCategory['categoryName']?>
                </span>
            </h1>
            <div><?=$article['text']?></div>
            <hr>
            <p><a href="edit.php?id=<?=$article['id_article']?>">Edit</a></p>
            <p><a href="delete.php?id=<?=$article['id_article']?>">Remove</a></p>

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
