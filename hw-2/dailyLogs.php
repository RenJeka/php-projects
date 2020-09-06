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
<style>
    .danger{
        color: red;
    }
</style>
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
    <tr class=" <?=(checkForBadLog($log)) ? 'danger': ''?>">
        <td><?=$log[0]?></td>
        <td><?=$log[1]?></td>
        <td><?=$log[2]?></td>
        <td><?=$log[3]?></td>
    </tr>
    <?endforeach;?>
</table>
