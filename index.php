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
        <th>Name - Age</th>
    </tr>
    <?php
    // Replace this with your data retrieval logic
    $data = [
        ['1', 'John'],
        ['2', 'Alice'],
        ['3', 'Bob'],
    ];
//adding...
    foreach ($data as $row) {
        echo "<tr><td>{$row[0]}</td><td>{$row[1]}</td></tr>";
    }
    ?>
</table>
</body>
</html>
