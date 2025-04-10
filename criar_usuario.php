<?php
require 'conexao.php';

$usuario = 'admin';
$senha = '123456';

$senha_hash = password_hash($senha, PASSWORD_DEFAULT);

$stmt = $pdo->prepare("INSERT INTO usuarios (usuario, senha) VALUES (:usuario, :senha)");
$stmt->bindParam(':usuario', $usuario);
$stmt->bindParam(':senha', $senha_hash);

if ($stmt->execute()) {
    echo "Usuário criado com sucesso!";
} else {
    echo "Erro ao criar usuário.";
}
?>
