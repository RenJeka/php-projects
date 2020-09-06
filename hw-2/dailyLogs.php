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
    <h1>Все логи за <?=$_GET['date'] ?? ''?></h1>
<p><a href="allLogs.php">🔙 Вернуться ко всем логам</a></p>
    <tr>
        <th>Время</th>
        <th>IP</th>
        <th>REQUEST URI</th>
        <th>Реферальная ссылка</th>
    </tr>
    <?foreach ($logs as $log) :?>
    <tr>

        <?
        // Если строка лога имеет в последним элементом слово "!warning!"— сделать для строки таблицы красную рамку
        if(checkForBadLog($log)):?>

            <td style="color: red"><?=$log[0]?></td>
            <td style="color: red"><?=$log[1]?></td>
            <td style="color: red"><?=$log[2]?></td>
            <td style="color: red"><?=$log[3]?></td>
        <?else:?>
            <td><?=$log[0]?></td>
            <td><?=$log[1]?></td>
            <td><?=$log[2]?></td>
            <td><?=$log[3]?></td>
        <?endif?>
    </tr>
    <?endforeach;?>
</table>
