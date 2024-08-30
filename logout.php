<?php 

session_start(),
unset($_SESSION["email"]);
unset($_SESSION["nome"]);
unset($_SESSION["nick_name"]);
unset($_SESSION["telefone"]);


session_destroy();
header("location:indexsemlogado.php");
exit;



?>