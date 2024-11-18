<?php
include('cabecalho.html');
include('conexao.php');
if (isset($_POST['emailc']) || isset($_POST['senha'])){
 if (strlen($_POST['emailc']) == 0){
        echo "Preencha o campo de email ";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha o campo de senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['emailc']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM adm WHERE emailc = '$emailc' AND senha ='$senha'"; 
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução so código SQL: " . $mysqli->error);
        $quantidade = $sql_query->num_rows;

    if($quantidade == 1){
        $usuario = $sql_query->fetch_assoc();
        session_start();
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        header("Location:adm.php");
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
            <form action="logadm.php" method="POST"> 
            <h2>Login</h2>
            <input type="text" placeholder="emailc" name="emailc">
            <input type="password" placeholder="senha" name="senha">
            <input type="submit" placeholder="senha">
            </form>
        </div>
</body>
</html>