<?php
include 'db.php';

$id = $_GET['id'];
$sql = "DELETE FROM produtos WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Erro ao deletar produto: " . $conn->error;
}

$conn->close();
?>
