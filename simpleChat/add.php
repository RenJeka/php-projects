<?php

include_once "model/db.php";

$fields = [
    'name' => '',
    'text' => ''
];
$err = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fields['name'] = trim($_POST['name']);
    $fields['text'] = trim($_POST['text']);

    if ($fields['name'] === '' || $fields['text'] === '') {
        $err = 'Заполните все поля!';
    } else {
        $sql = "INSERT messages(name, text) VALUES (:name, :text)";

        dbPrepareQuery($sql, $fields);
        header('Location:index.php');
        exit();
    }

}
?>
<div class="form">
    <form method="post">
        <p>Name: <input type="text" name="name" value="<?= $fields['name'] ?>"></p>
        <p>Text:
            <textarea name="text"><?= $fields['text'] ?> </textarea>
        </p>
        <p>
            <button>Send</button>
        </p>
        <p><?= $err ?></p>
    </form>
</div>