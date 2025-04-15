<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./cadastrostyle.css">
    <title>Cadastro</title>
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
        <form action="./cadastro_salvar.php" method="Post">
            <label for="email" id="email">E-mail</label><br>
            <input type="email" class="jonas" id="escreveremail" name="email"required><br>
            <label for="password" id="senha">Senha</label><br>
            <input type="password" class="jonas" name="password"required><br>
            <div class="perfil">
                <input type="radio" name="profile" value="Aluno" required>
                <label for="Aluno" id="Aluno">Aluno</label>
                <input type="radio" name="profile" value="Professor" required> 
                <label for="Professor" id="Professor">Professor</label>
            </div>
            <a href="">
                <button class="btn" type="submit">Continuar</button><br>
            </a>
        </form>
    </main>
</body>
</html>