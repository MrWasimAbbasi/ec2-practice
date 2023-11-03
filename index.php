<!DOCTYPE html>
<html>
<head>
    <title>Deploy to AWS Instance!!</title>
</head>
<body>
<h1>Data Display</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Name </th>
    </tr>
    <?php

$data = [
        ['1', 'John'],
        ['2', 'Alice'],
        ['3', 'Bob'],
    ];

    foreach ($data as $row) {
        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
    }
    ?>
</table>
</body>
</html>
