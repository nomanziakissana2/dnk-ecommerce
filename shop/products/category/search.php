<?php
require_once './../../backend/script.php';

$query = isset($_GET['q']) ? $conn->real_escape_string($_GET['q']) : '';

$sql = "SELECT * FROM products WHERE title LIKE '%$query%' LIMIT 10";
$result = $conn->query($sql);

$results = [];

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $results[] = $row;
    }
}

echo json_encode($results);
$conn->close();
