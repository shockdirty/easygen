<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
$data  = $_POST;

if($_GET != NULL){

	if(isset($_GET['del'])){
		$produto->delete($_GET['del']);	
	}
	elseif(isset($_GET['update'])){
		$produto->update($_GET);
	}
	elseif (isset($_GET['prod_entrada'])) {
		$produto->add_estoque($_GET);
	}
	
}

if($_POST != NULL)
{
	foreach($_POST as $values)
	{
		if($values == '')
		{
			echo 'preencha os campos corretamente';
			return false;
			exit;
		}
		else{
			$produto->add($_POST);
			exit;
		}
	}
}


