<?php
include 'config.php';

function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks ORDER BY created_at DESC";
    $result = $conn->query($sql);
    return $result->fetch_all(MYSQLI_ASSOC);
}

function addTask($task) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO tasks (task) VALUES (?)");
    $stmt->bind_param("s", $task);
    return $stmt->execute();
}

function deleteTask($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM tasks WHERE id = ?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>