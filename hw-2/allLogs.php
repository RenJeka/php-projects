<?php
include_once('model/apps.php');
include_once('model/logs.php');
$allLogs = getAllLogs();


?>

<table>
    <h1>Дни логов</h1>
    <thead>
        <tr>
            <th>Date</th>
        </tr>
    </thead>
    <tbody>
    <? foreach ($allLogs as $dayLog): ?>
        <tr>
            <td>
                <a href="dailyLogs.php?date=<?=$dayLog?>"><?=$dayLog?></a>
            </td>
        </tr>
    <?endforeach;?>
    </tbody>
</table>
