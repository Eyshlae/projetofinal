
<?php
include('sessao.php');
$id = $_GET['id'];
$conexao = mysqli_connect ('localhost','root','','connection');
$sql = "DELETE FROM carrinho WHERE idcar=$id";
$executar = mysqli_query($conexao,$sql);
if($executar == 1){
    echo "Sucesso!";
}
else{
    echo "Erro!";
}
echo "<div><a href='carrinho.php'>Voltar ao carrinho</a></div>";
$fechar = mysqli_close($conexao);
?>