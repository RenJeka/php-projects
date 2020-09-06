<?php

	include_once('functions.php');

	$isSend = false;
	$err = '';

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$title = trim($_POST['articleTitle']);
		$content = trim($_POST['articleText']);
		
		if($title === '' || $content === '') {
			$err = 'Заполните все поля!';

		} else if(mb_strlen($title, 'UTF8') < 2){
			$err = 'Заголовок должен быть не короче 2-х символов!';

		} else if(mb_strlen($content, 'UTF8') < 2){
			$err = 'Текст статьи должен быть не короче 2-х символов!';
		} 
		else {
			$isSend = true;
			addArticle($title, $content);
		}

	} else {
		$title = '';
		$content = '';
	}
	/*
		your code here
		check request method
		read POST-data
		validate data
		call addArticle
	*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add article</title>
	<style>
		*{
			font-size: 22px;
		}
	</style>
</head>
<body>
<div class="form">
	<? if($isSend): ?>
		<p>Статья успешно добавлена! Вы молодец!</p>
	<?else: ?>
		<form method="post">
			<p>Title: <input type="text" name="articleTitle" value="<?=$title?>"></p>
			<p>Text of article: <input type="text" name="articleText" value="<?=$content?>"></p>
			<p><button>Send</button></p>
			<p><?=$err?></p>
		</form>
	<?endif;?>
</div>
<hr>
<a href="index.php">Move to main page</a>
</body>
</html>
