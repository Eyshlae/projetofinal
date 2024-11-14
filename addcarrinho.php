<?php
include('sessao.php');
$idprod = $_GET['codigo'];
$idcli = $_SESSION['id'];
$con = mysqli_connect('localhost','root', '', 'connection');
$sql = "INSERT INTO carrinho (idcli, idprod) VALUES ('$idcli', '$idprod')";
$exe = mysqli_query($con, $sql);
if($exe){
	echo"Produto inserido no carrinho";
}
else{
	echo"erro";
}
echo "<a href='http://localhost/php/TCC/carrinho.php'>ver carrinho</a> <br>";

echo "<a href='http://localhost/php/TCC/vercarro.php'> Comprar mais</a>";
$fecha = mysqli_close($con);
?>