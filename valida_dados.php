<?php
include 'Conexao.php' ;

$success = false;

$rawdata = file_get_contents("php://input");

$json = json_decode($rawdata);

$login = $json->USUARIO;
$senha = $json->PASS;

$con = new Conexao($login, $senha);

$response = [
	'user'=>$login,
    'user_name'=>$con->user_name,
	'success'=>$con->response
	];
sleep(1);
echo json_encode($response);