<?php

    session_start();
    if (isset($_SESSION['users'])) {
        header("Location: dashboard.php");  
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./loginstyle.css">
    <title>Login</title>
</head>
<body>
    <header>
        <div class="Volte">
            <a href="../index.php" id="voltar">
                <button id="seta"></button>
            </a>
        </div>
        <h1>Syntonize</h1>
        <p>Insira seus dados</p>
    </header>
    <main>
        <form action="./login.php" method="Post">
            <label for="email" id="email">E-mail</label><br>
            <input type="email" class="jonas" id="escreveremail" name="email" required><br>
            <label for="password" id="senha">Senha</label><br>
            <input type="password" class="jonas" name="password" required><br>
            <div id="recuperar_senha">
                <a href="recuperar.php" id="recuperar">Recuperar Senha</a><br>
            </div>
            <a href="">
                <button class="btn" type="submit">Entrar</button><br>
            </a>
        </form>
    </main> 
</body>
</html>