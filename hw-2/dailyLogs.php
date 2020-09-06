<?php

include_once './model/apps.php';
include_once './model/logs.php';

$logs = [];

if (checkLogDay($_GET['date'])){
    $logs = getDailyLogs($_GET['date']);
} else {
    $logs = ['Такой лог не существует!'];
}
?>

<table>
    <h1><a href="allLogs.php">Все логи</a></h1>
    <?foreach ($logs as $log) :?>
    <tr>

        <?
        // Если строка лога имеет в последним элементом слово "!warning!"— сделать для строки таблицы красную рамку
        if(checkForBadLog($log)):?>

            <td style="color:red"><?=$log?></td>
        <?else:?>
            <td><?=$log?></td>
        <?endif?>
    </tr>
    <?endforeach;?>
</table>
