<?php


$success = true;






$response = [
	'usuario' => $_POST['USUARIO'],
	'senha' => $_POST["PASS"],
	'success' => $success
];

echo json_encode($response);

die;



echo $_POST['USUARIO'] ;
echo "<br>" ;
echo $_POST["PASS"];
echo "<br>" ;

?>