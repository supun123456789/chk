<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $other = $_POST['other'];

    $stmt = $conn->prepare("INSERT INTO users (name, age, sex, other) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("siss", $name, $age, $sex, $other);

    if ($stmt->execute()) {
        echo "User added successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
