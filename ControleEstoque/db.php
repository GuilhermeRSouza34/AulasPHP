<?php 
$servername = "localhost";
$username = "root"; //ou usuario
$password = ""; //ou senha
$dbname = "estoque_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}
?>