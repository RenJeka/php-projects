<?php
$myAssociativeArr = [
        "jake"=> ["name" => "Jake", "salary" => 5200],
        "ashlee"=> ["name" => "Ashlee", "salary" => 3200],
        "kevin"=> ["name" => "Kevin", "salary" => 3600],
];
?>

<table border="2">
    <tbody>
    <tr>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    <tr>
        <td><?= $myAssociativeArr["jake"]["name"] ?></td>
        <td><?= $myAssociativeArr["jake"]["salary"] ?></td>
    </tr>
    <tr>
        <td><?= $myAssociativeArr["ashlee"]["name"] ?></td>
        <td><?= $myAssociativeArr["ashlee"]["salary"] ?></td>
    </tr>
    <tr>
        <td><?= $myAssociativeArr["kevin"]["name"] ?></td>
        <td><?= $myAssociativeArr["kevin"]["salary"] ?></td>
    </tr>
    </tbody>
</table>
