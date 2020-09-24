<?php

include_once "model/messages.php";
$db = dbInstance();
$messages = messagesAll();

?>

<h1>My Chat</h1>
<div><a href="add.php">Добавить сообщение</a></div>
<hr>
<hr>
<div>
    <? foreach ($messages as $message): ?>
        <div>
            <p><b>Date:</b> <?= $message['dt_add'] ?></p>
            <p>
                <b>Name:</b> <?= $message['name'] ?>
                <br/>
                <b>Text:</b> <?= $message['text'] ?>
            </p>
            <hr>
        </div>
    <? endforeach; ?>
</div>
