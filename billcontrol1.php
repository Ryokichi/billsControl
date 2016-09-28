<?php
session_start();

echo "Usuario: ".$_POST['USUARIO']."<br>";

$_SESSION['USER'] = $_POST['USUARIO'] ;

echo "Logado com sucesso: ".$_SESSION['USER'];


?>