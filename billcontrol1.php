<?php
session_start();
$_SESSION['USER'] = $_POST['USUARIO'] ;


echo "Usuario: ".$_POST['USUARIO']."<br>";



echo "Logado com sucesso: ".$_SESSION['USER'];


?>