<?php
include('cabecalho.html');
include('conexao.php');
if (isset($_POST['email']) || isset($_POST['senha'])){
 if (strlen($_POST['email']) == 0){
        echo "Preencha o campo de email";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha o campo d senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cliente WHERE email = '$email' AND senha ='$senha'"; 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução so código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
        $usuario = $sql_query->fetch_assoc();
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        header("Location:menu.html");
        exit; // Interrompe a execução do script
    } else{
        echo "Falha ao logar! Email ou senha incorretos";
    }
}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="modal">
            <form action="logprincipal.php" method="POST"> 
            <h2>Login</h2>
            <input type="text" placeholder="email" name="email">
            <input type="password" placeholder="senha" name="senha">
            <input type="submit" placeholder="senha">
            </form>
        </div>
</body>
</html>