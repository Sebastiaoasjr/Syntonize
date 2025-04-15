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
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./indexstyle.css">
    <title>Syntonize</title>
</head>
<body>
    <header>
        <nav>
            <a href="" id="usuariolink" class="fas fa-user-circle"></a>
            <h1 id="Titulo">Syntonize</h1>
            <a href="">dwdadsw</a>
        </nav>
    </header>
    <main>
    </main>
    <footer>
        <nav>
            <a href="index.php" class="fas fa-home"></a>
            <a href="index.php" class="fas fa-podium"></a>
            <a href="index.php" class="fas fa-home"></a>
            <a href="index.php" class="fas fa-comments-o"></a>
            <a href="index.php" class="fas fa-cog"></a>
        </nav>
    </footer>
</body>
</html>