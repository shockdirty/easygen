<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/model/Categoria_model.php';

class Categoria extends Categoria_model
{
	public $data = [];

	public function __construct(){
		
		$this->categoria = new Categoria_model();
	}

	public function add($data)
	{

		$this->categoria->insert($data);
	}

	public function update($id, $data)
	{	
		$this->categoria->update(65, $categoria_data_update);
	}

	public function delete($id)
	{
		$this->categoria->delete($id);
	}

	public function list()
	{
		return $this->categoria->get();
	}
}
$categoria = new Categoria();

$data_cat = array(

	'cat_nome'=>'"Saúde"'
);
