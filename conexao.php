<?php
$host = 'localhost';
$db = 'inhaus'; // seu banco de dados
$user = 'root'; // ou outro usuário do seu MySQL
$pass = '';     // senha (geralmente vazia no XAMPP)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}
?>
