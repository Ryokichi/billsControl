<?php
include 'Conexao.php' ;

$success = false;
$login = $_POST['USUARIO'];
$senha = $_POST['PASS'];
$con = new Conexao($login, $senha);

$response = [
	'usuario' => $_POST['USUARIO'],
	'senha' => $_POST['PASS'],
	'success' => $con->response
	];


sleep(3);
echo json_encode($response);
