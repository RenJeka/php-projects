<?php

$db = new PDO('mysql:host=localhost;dbname=php1simple', 'root', '', [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
$db->exec('SET NAMES UTF8');

$sql = "SELECT * from messages order by dt_add desc ";

$query = $db->prepare($sql);
$query->execute();
$errInfo = $query->errorInfo();

if ($errInfo[0] !== PDO::ERR_NONE) {
    echo $errInfo[2];
    exit();
}

$messages = $query->fetchAll();
?>
<h1>My Chat</h1>
<div><a href="add.php">Добавить сообщение</a></div>
<hr>
<hr>
<div>
    <?foreach ($messages as $message): ?>
    <div>
        <p><b>Name:</b> <?=$message['name']?></p>
        <p><b>Date:</b> <?=$message['dt_add']?></p>
        <p><b>Text:</b> <?=$message['text']?></p>
        <hr>
    </div>
    <?endforeach;?>
</div>
