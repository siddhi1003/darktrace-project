<?php

$conn = new mysqli("localhost", "root", "", "darktrace");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM actors");

$actors = [];

while ($row = $result->fetch_assoc()) {
    $actors[] = $row;
}

header("Content-Type: application/json");

echo json_encode($actors);

?>