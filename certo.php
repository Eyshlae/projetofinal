<?php
$id= $_GET['id'];
$nome = $_GET['nome'];
$email = $_GET['email'];
$senha = $_GET['senha'];
$conexao = mysqli_connect('localhost', 'root', '', 'connection');
$sql = "UPDATE cliente SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
$executar = mysqli_query($conexao, $sql);
if ($executar) {
    echo "Atualizado com sucesso!";
} else {
    echo "Erro";
}
$fechar = mysqli_close($conexao);
?>
