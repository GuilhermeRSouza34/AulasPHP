<?php 
$host = 'localhost';
$db = 'blog_app';
$user = 'root'; // seu usuario do MySQL
$pass = ''; // sua senha do MySQL

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: ". $e->getMessage();
}
?>