<?php
header('Content-Type: application/json');
require 'db_connect.php';

$term = isset($_GET['term']) ? $_GET['term'] : '';

$sql = "SELECT name FROM items WHERE name LIKE ? LIMIT 10";
$stmt = $conn->prepare($sql);
$search = "%" . $term . "%";
$stmt->bind_param("s", $search);
$stmt->execute();
$result = $stmt->get_result();

$suggestions = [];

while ($row = $result->fetch_assoc()) {
    $suggestions[] = $row['name'];
}

echo json_encode($suggestions);
?>
