<a href = "relatocli.php?ordem=1">nome asc</a><br>
<a href = "relatocli.php?ordem=2">nome desc</a><br>
<?php
    $ordem = $_GET['ordem'];
    switch($ordem){
        case 1: $sql= "SELECT * from cliente order by nome asc"; break;
        case 2: $sql= "SELECT * from cliente order by nome desc"; break;
        default: $sql= "SELECT * from cliente";
    }
    $conexao = mysqli_connect('localhost','root','','connection');
    $executar = mysqli_query($conexao, $sql);
    ECHO "<table border = 1>
    <tr>
        <th>id</th>
        <th>nome</th>
        <th>email</th>
        <th>senha</th>
        <th>atualizar</th>
        <th>excluir</th>
    </tr>";
    while ($res = mysqli_fetch_array($executar)){
        $id =$res['id'];
        $nome =$res['nome'];
        $email = $res['email'];
        $senha = $res['senha'];
        echo "<tr>
        <td>$id</id>
        <td>$nome</td>
        <td>$email</td>
        <td>$senha</td>
        <td><a href='atualizar.php?id=$id'>atualizar</a></td>
        <td><a href='excluir.php?id=$id'>excluir</a></td>
        </tr>";
}
echo "</table>";
$fechar = mysqli_close($conexao);
?>