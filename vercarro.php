<?php
include('sessao.php');
include('cabecalho.html');
$con = mysqli_connect('localhost','root', '', 'connection');
$sql = "SELECT * FROM produto ORDER BY nome ASC";
$exe = mysqli_query($con, $sql);
while($res = mysqli_fetch_array($exe)){
	$codigo = $res['codigo'];
	$nome = $res['nome'];
	$preco = $res['preco'];
    $arquivo = $res['arquivo'];
	echo "<div style='background-color:	#708090;'><img width='100px' src='imagens/$arquivo'>
	Produto: $nome
  Preço: $preco 
        <a href='http://localhost/php/TCC/addcarrinho.php?codigo=$codigo'>Comprar</a>
  </div>";
}
$fecha = mysqli_close($con);
?>
</html>
