<?php
session_start();

$_SESSION = array();

if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

session_destroy();

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/style.css">
    <title>Conjectura Goldbach</title>
</head>

<body>
    <header class="header">
        <nav class="navigation">
            <a href="#" class="logo">Teste</a>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="https://github.com/jeanziin">Portfólio</a></li>
                <li><a href="https://www.linkedin.com/in/jean-freitas-4b700a231/">Contato</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="section">
            <div class="esquerda">
                <p>Conjectura Goldbach</p>
                <h5>A conjetura de Goldbach, proposta pelo matemático prussiano Christian Goldbach, é um dos problemas mais antigos não resolvidos da matemática, mais precisamente da teoria dos números.
                    Ela diz que todo número par maior que 2 pode ser representado pela soma de dois números primos.</h5>
                <a href="./index.php" class="btn">Testar</a>
            </div>
            <div class="direita">
            <img src="../style/math.png" alt="imagem-garota ">
                <div class="sombra"></div>
            </div>
        </section>
    </main>
</body>

</html>