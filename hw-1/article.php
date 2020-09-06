<?php

include_once 'functions.php';
$articles = getArticles();

$id = (int) ($_GET['id'] ?? '');
$post = $articles[$id] ?? null;
$hasPost = ($post !== null);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Статья — <?=$post['title']?> </title>
	<style>
		*{
			font-size: 22px;
		}
	</style>
</head>
<body>
	<div class="content">
		<?if ($hasPost): ?>
			<div class="article">
				<h1><?=$post['title']?></h1>
				<div><?=$post['content']?></div>
				<hr>
				<a href="delete.php?id=<?=$id?>">Remove</a>
			</div>
		<?else: ?>
			<div class="e404">
				<h1>Страница не найдена!</h1>
			</div>
		<?endif;?>
	</div>
	<hr>
	<a href="index.php">Move to main page</a>
</body>
</html>
