<?php
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
    <? if ($isSend): ?>
        <p>Статья успешно добавлена! Вы молодец!</p>
    <? else: ?>
        <form method="post">
            <p>Title: <input type="text" name="articleTitle" value="<?= $title ?>"></p>
            <p>Text of article: <input type="text" name="articleText" value="<?= $content ?>"></p>
            <p>
                <button>Send</button>
            </p>
            <p><?= $err ?></p>
        </form>
    <? endif; ?>
</div>
<hr>
<a href="index.php">Move to main page</a>
</body>
</html>
