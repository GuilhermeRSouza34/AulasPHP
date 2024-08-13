<?php
// Configuração da conexão com o banco de dados
$host = 'localhost';
$db = 'blog_app';
$user = 'root'; // seu usuário do MySQL
$pass = '';     // sua senha do MySQL

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configura o modo de erro
} catch (PDOException $e) {
    // Exibe uma mensagem de erro em caso de falha na conexão
    echo 'Conexão falhou: ' . $e->getMessage();
}
?>