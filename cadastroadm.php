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
    <link rel="stylesheet" href="cadadm.css">
</head>
<body>
        <div class="modal">
                <form action="cadadm.php">
                <h2>Cadastre-se</h2>
                <input type="text" placeholder="nome" name="nome">
                <input type="text" placeholder="email comecial" name="emailc">
                <input type="password" placeholder="senha" name="senha">
                <input type="submit">
                </form>
        </div>
</body>
</html>