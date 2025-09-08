<?php
include 'config.php';

$result = $conn->query("SELECT * FROM users");
$users = array();

while ($row = $result->fetch_assoc()) {
    $users[] = $row;
}

header('Content-Type: application/json');
echo json_encode($users);

$conn->close();
?>
