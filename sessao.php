<?php
session_start();
if (!isset($_SESSION['id'])) {
  die ("<a href='http://localhost/php/front/login.php'>Faça o login para acessar o carrinho</a></div>");
}
?>
