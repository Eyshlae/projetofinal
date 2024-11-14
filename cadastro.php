<?php
include('cabecalho.html');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>
        <div class="modal">
                <form action="backcadastro.php">
                <h2>Cadastre seu produto</h2>
                <input type="text" placeholder="nome" name="nome">
                <input type="text" placeholder="quantidade" name="quantidade">
                <input type="text" placeholder="preco" name="preco">
                <input type="submit">
                </form>
        </div>
</body>
</html>