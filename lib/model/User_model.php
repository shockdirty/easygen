<?php

/**
 * Modelo de classe geral de produtos, contém metodos para cadastrar, deletar, listar, alterar.
 * Modo de Usar:
 * require_once './Produto.class.php';
 * $produto = new Produto();
 * 
 */

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Database.class.php';

class User_model extends Database
{
	public function valida_acesso($usr, $pass)
	{

		$sql = $this->db->query("SELECT user_login, user_pwd FROM eg_users WHERE user_login = '$usr'AND user_pwd = '$pass'");
		$result = $sql->fetchAll();
		if(!empty($result))
		{
			$_SESSION['login'] = $usr;
			$_SESSION['passwd'] = $pass;
			header('location:../');
		}else{
			unset($_SESSION['login']);
			unset($_SESSION['passwd']);
			header('location:index.php');
		}

	}
}

$user = new User_model();

