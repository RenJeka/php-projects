<div class="form">
    <form method="post">
        <p>Name: <input type="text" name="name" value="<?= $fields['name'] ?>"></p>
        <p>Text:
            <textarea name="text"><?= $fields['text'] ?> </textarea>
        </p>
        <p>
            <button>Send</button>
        </p>

        <div class="error-list">
            <? foreach ($validateErrors as $error):?>
            <p><?= $error?></p>
            <? endforeach;?>
        </div>

    </form>
</div>