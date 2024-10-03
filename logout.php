<?php
session_start();
$_SESSION['email'] = null;
session_destroy();
echo "Logout realizado com sucesso!
<a href='http://localhost/php/front/login.html'>clique para refazer o login</a></div><br>
<a href='http://localhost/php/front/menu.html'>Volte para o menu</a></div>";?>