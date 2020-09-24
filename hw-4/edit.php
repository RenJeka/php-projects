<?php
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit article</title>
    <style>
        *{
            font-size: 22px;
        }
    </style>
</head>
<body>
<div class="form">
    <? if($isEdit): ?>
        <p>Статья успешно изменена!</p>
    <?else: ?>
        <form method="post">
            <p>Title: <input type="text" name="editArticleTitle" value="<?=$editTitle?>"></p>
            <p>Text of article: <input type="text" name="editArticleText" value="<?=$editContent?>"></p>
            <p><button>Send</button></p>
            <p><?=$err?></p>
        </form>
    <?endif;?>
</div>
<hr>
<a href="index.php">Move to main page</a>
</body>
</html>
