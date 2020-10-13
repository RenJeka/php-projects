
<h1>My Chat-table</h1>
<div><a href="index.php">View as list</a></div>

<table>
    <? foreach ($messages as $message): ?>
        <tr>
            <td><b>Date:</b> <?= $message['dt_add'] ?></td>
            <td>
                <b>Name:</b> <?= $message['name'] ?>
                <b>Maderated:</b> <?= $message['text'] ?>
            </td>
        </tr>
    <? endforeach; ?>
</table>
