<?php
require 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindParam(':usuario', $usuario);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && hash('sha256', $senha) === $user['senha']) {
        echo "Login bem-sucedido!";
        // redirecionar ou iniciar sessão, etc.
    } else {
        echo "Usuário ou senha incorretos.";
    }
}
?>
