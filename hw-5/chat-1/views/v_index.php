
<h1>My Chat</h1>
<div><a href="add.php">Добавить сообщение</a></div>
<div><a href="index.php?view=table">Режим таблицы</a></div>
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
            <a href="message.php?id=<?=$message['id_message']?>"> Просмотреть сообщение</a>
            <hr>
        </div>
    <? endforeach; ?>
</div>
