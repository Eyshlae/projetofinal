<?php
$id = $_GET['id'];
$conexao = mysqli_connect('localhost','root','','connection');
$sql = "SELECT * FROM cliente WHERE id=$id";
$executar = mysqli_query($conexao, $sql);
$res = mysqli_fetch_array($executar);
$fechar = mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atualizar produtos</h1>
    <form action="certo.php">
    id <input type="text" name="id"
        value="<?php echo $res['id'];?>" readonly><br>
        nome<input type="text" name="nome"
        value="<?php echo $res['nome'];?>"><br>
        email<input type="text" name="email"
        value="<?php echo $res['email'];?>"><br>
        senha <input type="text" name="senha"
        value="<?php echo $res['senha'];?>"><br>
    <br>
        <input type="submit">
    </form>
</body>
</html>