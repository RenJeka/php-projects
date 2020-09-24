<?php
include_once "model/articles.php";

$inputParameters = [
    'title' => '',
    'id_category' => '',
    'text' => ''
];
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $inputParameters['title'] = trim($_POST['title']);
    $inputParameters['text'] = trim($_POST['text']);

    if ( array_key_exists('id_category', $_POST)){
        $inputParameters['id_category'] = trim($_POST['id_category']);
    }

    if ($inputParameters['title'] === '' || $inputParameters['text'] === '' || $inputParameters['id_category'] === '') {
        $err = 'Заполните все поля!';
    } else {
        addNewArticle($inputParameters);
        header('Location:index.php');
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
<div class="form">

    <form method="post">
        <p>Заголовок статьи: <input type="text" name="title" ></p>
        <p> Выберите категорию статьи:
            <select  name="id_category">
                <option value="" hidden >Выберите значение:</option>
                <option value="1">Спорт</option>
                <option value="2">Автомобили</option>
                <option value="3">Быт</option>
                <option value="4">Искусство</option>
            </select>
        </p>
        <p>Текст статьи:
            <textarea name="text"> </textarea>
        </p>
        <p>
            <button>Send</button>
        </p>
        <p><?= $err ?></p>
    </form>
</div>
<hr>
<a href="index.php">Move to main page</a>
</body>
</html>
