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
	echo "<div style='background-color:	#708090;'><img width='198px' src='imagens/$arquivo'>
	<h3>
		Produto: $nome
		  Preço: $preco
	</h3>
        <a href='http://localhost/php/TCC/addcarrinho.php?codigo=$codigo'>Comprar</a>
  </div>";
}
$fecha = mysqli_close($con);
?>
</html>
