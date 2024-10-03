<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "connection";

// Cria a conexão
$mysqli = new mysqli($host, $usuario, $senha, $banco);

// Verifica se ocorreu algum erro na conexão
if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}