<?php
session_start();
$_SESSION['email'] = null;
session_destroy();
echo "Logout realizado com sucesso!
<a href='http://localhost/php/TCC/logprincipal.php'>clique para refazer o login</a></div><br>
<a href='http://localhost/php/TCC/inicio.html'>Volte para o menu</a></div>";?>