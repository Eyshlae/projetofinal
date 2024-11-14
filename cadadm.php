<?php
//include('sessao.php');
$nome = $_GET['nome'];
$emailc = $_GET['emailc'];
$senha = $_GET['senha'];
$conexao = mysqli_connect('localhost', 'root','', 'connection');
$instrucao = "INSERT INTO adm (nome,emailc,senha) VALUES ('$nome','$emailc','$senha')";
$executar = mysqli_query($conexao, $instrucao);
if($executar == 1 ){
    header("location: adm.php");
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>