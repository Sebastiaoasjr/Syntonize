<?php

require '../BD/config.php';
session_start();

if  (!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['profile'])) {
    echo "<script>alert('Preencha todos os campos!'); window.location.href = 'cadastro.php';</script>"; 
    exit;
}

    $email = $_POST['email'];
    $password = $_POST['password'];
    $profile = $_POST['profile'];

try {
    $stmt = $pdo->prepare("INSERT INTO users (email, password, profile) VALUES (:email, :password, :profile)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':profile', $profile);
    
    if ($stmt->execute()) {

        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);

        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['usuario'] = $usuario;

        echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = '../apresentacao/index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location.href = './cadastro.php';</script>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>