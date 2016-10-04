<?php
include 'config.php' ;
class Conexao
{
	protected $user ;
	protected $pass;
	protected $host;
	public    $response = false;
	public    $user_name;
    
	public function __construct( $login, $senha)
	{	
		$data = connec_config();
		$user = $data['user'];
		$pass = $data['password'];
		$host = $data['host'];

		$pdo = new PDO("mysql:host=".$host.";dbname=billscontrol" , $user , $pass) ;
        //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $rs = $pdo->prepare("SELECT * FROM usuario WHERE login=:login");
        $rs->bindParam(':login', $login, PDO::PARAM_STR);
        $rs->execute();

        $result = $rs->fetch(PDO::FETCH_ASSOC);

        $rs_login = $result['login'];
        $rs_senha = $result['password'];
        $rs_name  = $result['name'];

        //echo "1 $rs_login | $login | $rs_senha | $senha"  | $rs_name ;
        //die;

        if ($login<>null && $rs_login==$login && $rs_senha==$senha){
           $this->response = true;
           $this->user_name = $rs_name;
        }
	}
}