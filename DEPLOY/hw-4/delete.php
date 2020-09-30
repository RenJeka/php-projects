<?php

include_once "model/articles.php";

$isDeleted = false;
$errors = array();
$articleId = (int)($_GET['id'] ?? '');

if ($articleId > 0) {
    $isDeleted = deleteArticle($articleId);
} else {
    array_push($errors, "Неправильный ID! Попробуйте удалить статью снова.");
}

?>

<? if ($isDeleted): ?>
    <p>Статья удалена!</p>
<? endif; ?>
<? foreach ($errors as  $error): ?>
    <p class="error"><?= $error ?></p>
<? endforeach; ?>
<hr>
<a href="index.php">На главную</a>
