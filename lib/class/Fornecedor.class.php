<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/model/Fornecedor_model.php';

class Fornecedor extends  Fornecedor_model
{
	public $data = [];

	public function __construct(){
		
		$this->fornecedor = new fornecedor_model();
	}

	public function add($data)
	{

		$this->fornecedor->insert($data);
	}

	public function update($id, $data)
	{	
		$this->fornecedor->update(65, $fornecedor_data_update);
	}

	public function delete($id)
	{
		$this->fornecedor->delete($id);
	}

	public function list()
	{
		return $this->fornecedor->get();
	}
}

$fornecedor = new fornecedor();


//$data_t = array("forn_id"=>"teste",	"forn_nome"=>"teste",	"forn_email"=>"teste",	"forn_telefone"	=>"teste","forn_estado"=>"teste",	"forn_cidade"=>"teste");

///$fornecedor->add($data_t);