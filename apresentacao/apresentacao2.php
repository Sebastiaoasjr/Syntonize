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
    <link rel="stylesheet" href="./apresentacao2style.css">
    <title>Syntonize</title>
</head>
<body>
    <header>
        <div class="Volte">
            <a href="./index.php" id="voltar">
                <button id="seta"></button>
            </a>
        </div>
    </header>
    <main>
        <div class="balao">
            <p>Digite o seu nome!</p>
        </div>
        <img src="../img/passaro.png">
        <form action="./nome_salvar.php" method="Post">
            <input type="hidden" name="id" id="id" class="jonas" required>
            <input type="text" name="name" id="name" placeholder="Digite seu nome aqui" class="jonas" required>
            <div>
                <button class="continuar" type="submit">Continuar</button>     
            </div>
        </form>

        <?php
            if (isset($_SESSION['usuario'])) {
                $usuario = $_SESSION['usuario'];
                echo "<script>document.getElementById('id').value = '" . htmlspecialchars($usuario['id']) . "';</script>";
            }
        ?>
    </main>
</body>
</html>