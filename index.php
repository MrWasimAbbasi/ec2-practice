<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Include DataTables CSS from the DataTables CDN -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">

    <title>Deploy to AWS Instance!!</title>
</head>
<body>
<h1>Data Display</h1>
<table class="table table-bordered table-hover table-stripped">
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
