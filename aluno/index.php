<?php
// Exibe erros para debug (remova em produção)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Caminho do arquivo JSON
$arquivoJson = 'progresso.json';

// Verifica existência do arquivo
if (!file_exists($arquivoJson)) {
    die("Arquivo progresso.json não encontrado.");
}

// Decodifica o JSON
$progresso = json_decode(file_get_contents($arquivoJson), true);
if ($progresso === null) {
    die("Erro ao decodificar JSON: " . json_last_error_msg());
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="indexstyle.css">
    <title>Syntonize</title>
</head>
<body>
    <header>
        <nav>
            <a href="" id="usuariolink">
                <img id="usuarioimg" src="./img/usuario.png" alt="">
            </a>
        </nav>
    </header>
    <main>
        <hr>
        <div id="container_cap1_1">
            <div id="container_cap1">
                <p id="Nivel1P">Nível 1 - DIFERENCIE</p>
                <h1 id="Nivel1">Aprenda oque é grosso e fino!</h1>
            </div>
        </div>
        <div id="balao_container">
            <div class="balao">
                <p id="balaoP">INICIAR!</p>
            </div>
        </div>
        <div class="caminho">
        <?php foreach ($progresso as $nivelIndex => $nivel): ?>
        <?php
            $nivelNum = $nivelIndex + 1;
            $statusNivel = $nivel['status'] ?? 'bloqueado';

            if ($statusNivel === 'disponivel' || $statusNivel === 'completo') {
                $primeiraSublicao = null;

                if (!empty($nivel['sublicoes']) && is_array($nivel['sublicoes'])) {
                    foreach ($nivel['sublicoes'] as $subIndex => $sublicao) {
                        $statusSub = $sublicao['status'] ?? 'bloqueado';
                        if ($statusSub === 'disponivel' || $statusSub === 'completo') {
                            $primeiraSublicao = $subIndex + 1;
                            break;
                        }
                    }
                }
            $primeiro = ($nivelIndex === 0);
            $ultimo = ($nivelIndex === count($progresso) - 1);

        if ($primeiraSublicao !== null) {
                    ?>

        <?php if ($statusSub === 'disponivel' || $statusSub === 'completo'): ?>
    <a href="sublicao.php?nivel=<?= $nivelNum ?>&sublicao=<?= $primeiraSublicao ?>" 
       class="nivel <?= $statusNivel ?> <?= $primeiro ? 'primeiro' : '' ?> <?= $ultimo ? 'ultimo' : '' ?>">
        <?= $statusNivel === 'completo' ?>
    </a>
<?php else: ?>
    <div class="nivel <?= $statusNivel ?> <?= $primeiro ? 'primeiro' : '' ?> <?= $ultimo ? 'ultimo' : '' ?>"></div>
<?php endif; ?>

                    <form method="get" action="sublicao.php">
                        <input type="hidden" name="nivel" value="<?= $nivelNum ?>">
                        <input type="hidden" name="sublicao" value="<?= $primeiraSublicao ?>">
                        <button type="submit" class="ativbotao">
                            <img src="./img/alturadasnotas.png" alt="">
                        </button>
                    </form>
                    <?php
                } else {
                    ?>
                    <div class="mensagem">Nível <?= $nivelNum ?> - Nenhuma sublicão disponível</div>
                    <?php
                }
            } else {
                ?>
                <div class="bloqueado">Nível <?= $nivelNum ?> - Bloqueado</div>
                <?php
            }
        ?>
    <?php endforeach; ?>
    </div>
    </main>
    <footer>
        <hr id="footerhr">
        <nav>
            <a href="">
                <img src="" alt="" class="imagemfooter" id="seta">
            </a>
            <a href="">
                <img src="./img/medalha.png" alt="" class="imagemfooter" id="medalha">
            </a>
            <a href="">
                <img src="./img/casa.png" alt="" class="imagemfooter" id="casa">
            </a>
            <a href="">
                <img src="./img/conversa.png" alt="" class="imagemfooter" id="conversa">
            </a>
            <a href="">
                <img src="./img/config.png" alt="" class="imagemfooter" id="config">
            </a>
        </nav>
    </footer>
</body>
</html>  