<?php
//include('sessao.php');
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$conexao = mysqli_connect('localhost', 'root','', 'connection');
$instrucao = "INSERT INTO cliente (nome,email,senha) VALUES ('$nome','$email','$senha')";
$executar = mysqli_query($conexao, $instrucao);
if($executar == 1 ){
    header("location: menu.html");
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>