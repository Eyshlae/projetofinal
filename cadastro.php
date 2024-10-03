<?php
//include('sessao.php');
$nome = $_GET['nome'];
$quantidade = $_GET['quantidade'];
$preco = $_GET['preco'];
$conexao = mysqli_connect('localhost', 'root','', 'connection');
$instrucao = "INSERT INTO produto (nome,quantidade,preco) VALUES ('$nome','$quantidade','$preco')";
$executar = mysqli_query($conexao, $instrucao);
if($executar == 1 ){
    echo "Sucesso!";
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>