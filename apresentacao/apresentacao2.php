<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./apresentacao2.css">
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
            <input type="text" name="name" id="name" placeholder="Digite seu nome aqui" class="jonas" required>
        </form>
        <div>
            <a href="">
                <button class="continuar" type="submit">Continuar</button>
            </a>
        </div>
    </main>
</body>
</html>