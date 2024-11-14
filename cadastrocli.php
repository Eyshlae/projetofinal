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
    <link rel="stylesheet" href="cadcli.css">
</head>
<body>
    <div class="modal">
        <form action="cadcli.php">
            <h2>Cadastre-se</h2>
            <input type="text" placeholder="nome" name="nome">
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="senha" name="senha">
            <input type="submit" value="Enviar">
        </form>
        <a href="http://localhost/php/TCC/logprincipal.php">Já tem conta? Faça login aqui.</a>

    </div>
</body>
</html>