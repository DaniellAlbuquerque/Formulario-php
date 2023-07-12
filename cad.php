<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $nome = $_GET["nome"];
        echo "É um prazer ti conhecer, $nome! Seja bem vindo!";
        ?>
        <a href="javascript:history.go(-1)"><button>Voltar</button></a>


    </main>
</body>

</html>