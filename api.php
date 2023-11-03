<?php
header('Content-Type: application/json');

// Replace this with your API data generation logic
$data = [
    ['id' => 1, 'name' => 'John'],
    ['id' => 2, 'name' => 'Alice'],
    ['id' => 3, 'name' => 'Bob'],
];

echo json_encode($data);
?>
