<?php
session_start();
if (!isset($_SESSION['id'])) {
  die ("<a href='http://localhost/php/TCC/login.php'>Faça o login para acessar o carrinho</a></div>");
}
?>
