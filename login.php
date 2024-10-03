<?php
include('conexao.php');
if (isset($_POST['email']) || isset($_POST['senha'])){
 if (strlen($_POST['email']) == 0){
        echo "Preencha o campo de email";
    } else if (strlen($_POST['senha']) == 0){
        echo "Preencha o campo dde senha";
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
        header("Location: carrinho1.php");
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
    <title>Cadastre-se</title>
    <link rel="icon" href="imagens/logo.png">
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="menu.html"class="logo">
                <img src="imagens/logo.png" alt="Connection and Art">
                <h1>CONNECTON AND ART</h1>
            </a>
            <div class="search-bar">
                <input type="text" placeholder="Pesquise um artista">
            </div>
            <div class="user-actions">
                <ul>
                    <li>
                        <a href="carrinho.php">
                            <img src="imagens/carrinho.png" alt="carrinho">
                        </a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <img src="imagens/menu.png" alt="carrinho" class="dropbtn">
                            <div class="dropdown-content">
                            <a href="login.php">login</a>
                            <a href="logout.php">logout</a>
                            <a href="http://localhost/php/front/cadastro.html">Cadastro de prod</a>
                            <a href="http://localhost/php/front/cadastrocli.html">Cadastro de clientes</a>
                            </div>
                          </div>
                          </div>
                    </li>
                </ul>
            </div>
    </header>
    <hr>
        <div class="modal">
                <form action="login.php" method="POST">
                <h1>Login</h1>
                <input type="text" placeholder="email" name="email">
                <input type="password" placeholder="senha" name="senha">
                <input type="submit">
                </form>
        </div>
</body>
</html>