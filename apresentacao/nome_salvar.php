<?php

require '../BD/config.php';

if (!isset($_POST['name'])) {
    echo "<script>alert('Preencha todos os campos!'); window.location.href = './apresentacao2.php';</script>"; 
    exit;
}

$name = $_POST['name'];

try {
    $stmt = $pdo->prepare("INSERT INTO users (name) VALUES (:name)");
    $stmt->bindParam(':name', $name);
    
    if ($stmt->execute()) {
        echo "<script>alert('Nome salvo com sucesso!'); window.location.href = '../index.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location.href = './apresentacao2.php';</script>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>