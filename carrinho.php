<?php
include('sessao.php');
$idcli = $_SESSION['id'];
$con = mysqli_connect('localhost','root', '', 'connection');
$sql = "SELECT * FROM carrinho, produto WHERE carrinho.idprod = produto.codigo AND carrinho.idcli = '$idcli'";
$exe = mysqli_query($con, $sql);
$total = 0;
while($res = mysqli_fetch_array($exe)){
	$idcar = $res['idcar'];
	$nome = $res['nome'];
	$preco = $res['preco'];
	$total += $preco;
	echo "<div>Produto: $nome 
	Preço: $preco 
	<a href='http://localhost/php/TCC/delprodu.php?id=$idcar'>Remover</a></div>";
}
echo"<div>O preco total é:<b> $total</b></div>";
echo "<div><a href='http://localhost/php/TCC/vercarro.php'>Comprar mais</a></div>";
$fecha = mysqli_close($con);
?>