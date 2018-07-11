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

class Categoria_model extends Database
{
	private $data;
	private $conn;
	public $categoria;

	public function insert($data)
	{
		$cols = implode(',', array_keys($data));
		$values = implode(',', array_values($data));
		//mysqli_real_escape_string($this->db, $_POST['nome']);
		
		function srt_map($str)
		{
			return "'".$str."'";
		}
		$this->data = array_map('srt_map', $data);

		$rows = implode("," , $this->data);
		$sql = $this->db->query("INSERT INTO  eg_categorias_produto($cols) VALUES ($rows);");
	}

	public function update($id, $data)
	{	
		foreach($data as $column => $value){
			echo $column;
			$sql = $this->db->query("UPDATE  eg_categorias_produto SET $column = '$value' WHERE cat_id = '$id' ");
		}
		
	}

	public function delete($id_prod)
	{
		$sql = $this->db->query("DELETE FROM eg_categorias_produto WHERE cat_id = $id_prod");
	}

	public function get($id_prod = NULL)
	{
		if(!isset($id_prod)){
			$sql = $this->db->query("SELECT * FROM eg_categorias_produto");
			foreach ($sql as $key) {

				$result[] = $key;
			}
			return $result;	
		}
		else{
			$sql = $this->db->query("SELECT * FROM eg_categorias_produto WHERE cat_id = $id_prod");

			foreach ($sql as $key) {

				$result[] = $key;
			}
			return $result;	
		}
	}
}


