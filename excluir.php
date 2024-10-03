<?php
$id = $_GET['id'];
$conexao = mysqli_connect ('localhost','root','','connection');
$sql = "DELETE FROM cliente WHERE id=$id";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    echo "Sucesso!";
}
else{
    echo "Erro!";
}
$fechar = mysqli_close($conexao);
?>