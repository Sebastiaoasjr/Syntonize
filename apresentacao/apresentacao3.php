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
    <link rel="stylesheet" href="./apresentacao3style.css">
    <title>Syntonize</title>
</head>
<body>
    <main>
        <div class="balao">
            <p>Agora, vamos jogar!</p>
        </div>
        <img src="../img/passaro.png">
        <form action="../login/login.php" method="Post">
            <div>
                <button class="continuar" type="submit">Continuar</button>
            </div>
        </form>
    </main>
</body>
</html>