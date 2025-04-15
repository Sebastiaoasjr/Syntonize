<?php
    session_start();
    require '../BD/config.php';
    if (!isset($_SESSION['usuario'])) {
        header("Location: ../login/index.php");
        exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./apresentacaostyle.css">
    <title>Syntonize</title>
</head>
<body>
    <main>
        <div class="balao">
            <p>Olá, eu sou o Arigó!</p>
        </div>
        <img src="../img/passaro.png">
        <div>
            <a href="./apresentacao2.php">
                <button class="continuar" type="submit">Continuar</button>
            </a>
        </div>
    </main>
</body>
</html>