<?php

$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '');
$db->exec('SET NAMES UTF8');

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

        $query = $db->prepare($sql);
        $query->execute($fields);
        $errInfo = $query->errorInfo();

        if ($errInfo[0] !== PDO::ERR_NONE) {
            echo $errInfo[2];
            exit();
        }
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