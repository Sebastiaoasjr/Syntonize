<?php

require  '../BD/config.php';

session_start();

$email = $_POST['email'];
$password = $_POST['password']; 

$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$stmt->execute([$email]);

$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && $usuario['password'] == $password) {
    $_SESSION['usuario'] = $usuario;

    if ($usuario['profile'] == 'Admin') {
        header("Location: ../admin/index.php");
    } else if ($usuario['profile'] == 'Professor') {
        header("Location: ../professor/index.php");
    } else {
        header("Location: ../aluno/index.php");
    }

    exit;
} else {
    echo "<script>alert('Usuário ou senha inválidos'); window.location.href = './index.php';</script>";
}
?>