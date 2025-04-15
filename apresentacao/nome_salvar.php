<?php

require '../BD/config.php';

if (!isset($_POST['name'])) {
    echo "<script>alert('Preencha todos os campos!'); window.location.href = './apresentacao2.php';</script>"; 
    exit;
}

$id = $_POST['id'];
$name = $_POST['name'];

try {
    $stmt = $pdo->prepare("UPDATE users SET name = :name WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    
    if ($stmt->execute()) {
        echo "<script>alert('Nome salvo com sucesso!'); window.location.href = './apresentacao3.php';</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar. Tente novamente.'); window.location.href = './apresentacao2.php';</script>";
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>