<?php
/**
 * Modelo de classe geral de produtos, contém metodos para cadastrar, deletar, listar, alterar.
 * Modo de Usar:
 * require_once './Produto.class.php';
 */

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Database.class.php';

__autoload('Database.class');

class Produto_model extends Database
{

	private $data;
	protected $estoque;
	public $categoria;


	public function insert($data)
	{
		$rows_check = $this->check_exists($data['prod_nome']);

		if($rows_check > 0){
			echo "produto ja existe";
			return false;
		}else{
			$cols = implode(',', array_keys($data));
			$values = implode(',', array_values($data));
			function srt_map($str)
			{
				return "'".$str."'";
			}
			$this->data = array_map('srt_map', $data);

			$rows = implode("," , $this->data);
			$sql = $this->db->query("INSERT INTO  eg_produtos($cols) VALUES ($rows)");
			echo 'produto cadastrado!';
		}
	}
	public function update($data)
	{	
		$prod_nome = $data['prod_nome'];
		$prod_cat_id = $data['prod_cat_id'];
		$prod_valor_bruto = $data['prod_valor_bruto'];
		$prod_desc = $data['prod_desc'];
		$prod_id = $data['prod_id'];

		$sql = $this->db->query("UPDATE  eg_produtos SET prod_nome = '$prod_nome', prod_cat_id = '$prod_cat_id', prod_valor_bruto = '$prod_valor_bruto', prod_desc = '$prod_desc'  WHERE  prod_id = '$prod_id' ");
	}

	public function delete($prod_id)
	{
		$sql = $this->db->query("DELETE FROM eg_produtos WHERE prod_id = $prod_id");
	}

	public function get_all()
	{	
		$sql= $this->db->query("SELECT * FROM eg_produtos INNER JOIN  eg_categorias_produto ON (prod_cat_id = cat_id)");
		$result = $sql->fetchAll();
		return $result;	
	}

	public function get($id)
	{
		$sql = $this->db->query("SELECT * FROM eg_produtos WHERE prod_id = '$id'");
		$result = $sql->fetchAll();
		return $result;
	}
	public function set_estoque($data)
	{	
		if(!empty($data)){

			$prod_id = $data['estq_produto'];
			$qtd_update = $data['prod_qtd_estq'];
			$usr_nome = $data['estq_fornecedor'];
			$this->reg_log($qtd_update, $prod_id, 'entrada' , $usr_nome);

			$sql = $this->db->query("SELECT prod_id, prod_qtd_estq FROM eg_produtos WHERE prod_id = '$prod_id'");

			foreach ($sql as $key) {

				$current_value = $key['prod_qtd_estq'];

				$total = $current_value + $qtd_update;

				$sql = $this->db->query("UPDATE  eg_produtos SET prod_qtd_estq = '$total' WHERE prod_id = '$prod_id' ");
			}
		}else{
			return false;
		}

	}
	public function unset_estoque($data)
	{	
		if(!empty($data)){
			$prod_id = $data['estq_produto'];
			$qtd_update = $data['prod_qtd_estq'];
			$this->reg_log($qtd_update, $prod_id, 'saida');
			$sql = $this->db->query("SELECT prod_id, prod_qtd_estq FROM eg_produtos WHERE prod_id = '$prod_id'");

			foreach ($sql as $key) {

				$current_value = $key['prod_qtd_estq'];

				$total = $current_value - $qtd_update;

				$sql = $this->db->query("UPDATE  eg_produtos SET prod_qtd_estq = '$total' WHERE prod_id = '$prod_id' ");
			}
		}else{
			return false;
		}
	}
	public  function get_prod_categoria($query_select)
	{
		$sql = $this->db->query("SELECT  prod_nome, prod_id FROM eg_produtos INNER JOIN  eg_categorias_produto ON (cat_id = prod_cat_id) WHERE cat_id= '$query_select'");
		$rows = $sql->fetchAll();

		function make_select($rows){
			foreach($rows as $keys)
			{
				echo '<option value="'.$keys['prod_id'].'">'.$keys['prod_nome'].'</option>';
			}
		}
		make_select($rows);
	}

	public function check_exists($prod_nome)
	{
		$sql= $this->db->query("SELECT * FROM eg_produtos INNER JOIN  eg_categorias_produto ON (prod_cat_id = cat_id) WHERE prod_nome = '$prod_nome'");
		$rows = $sql->rowCount();
		return $rows;
	}

	public function reg_log($qtd, $prod_id, $status, $usr_nome)
	{	 
		$this->db->query
		("INSERT INTO reg_log(prod_nome, usr_nome, log_qtd_item, log_status)VALUES((SELECT prod_nome FROM eg_produtos WHERE prod_id='$prod_id'), 
			(SELECT forn_nome FROM eg_fornecedor WHERE forn_id='$usr_nome'), '$qtd','$status');");
	}
	public function get_prod_relat($filter = null)
	{
		switch($filter)
		{
			case null:
				$sql = $this->db->query("SELECT * FROM reg_log");
				$res = $sql->fetchAll();
				return $res;
			break;
			case 'saida':
				$sql = $this->db->query("SELECT * FROM reg_log WHERE log_status = 'saida'");
				$res = $sql->fetchAll();
				return $res;
			break;
			case 'entrada':
				$sql = $this->db->query("SELECT * FROM reg_log WHERE log_status = 'entrada'");
				$res = $sql->fetchAll();
				return $res;
			break;
			default:
				$sql = $this->db->query("SELECT * FROM reg_log");
				$res = $sql->fetchAll();
				return $res;
			break;
		}
	}
}




$produto = new Produto_model();

// dados da classe de produtos
$produto_data_add = Array(
	'prod_categoria'=>"'Eletronico'",
	'prod_nome' =>"'Iphone4s'",
	'prod_desc' =>"'iphone novo'",
	'prod_estoque_min' =>"'35'",
	'prod_estoque_atual' =>"'2230'",
	'prod_valor_bruto' =>"'1350'",
	'prod_valor_liq' =>"'39900'", 
	'prod_data_cadastro'=>"'20022019'"
);

$produto_data_update = Array(
	'prod_categoria'=>'Perfsssumes',
	'prod_nome' =>'aeee',
	'prod_desc' =>'iphone novo',
	'prod_estoque_min' =>'35',
	'prod_estoque_atual' =>'2230',
	'prod_valor_bruto' =>'1350',
	'prod_valor_liq' =>'39900', 
);


//$produto->insert($produto_data_update);
//$produto->update(65, $produto_data_update);

/* Metodos funcionais d modelo de produtos
$produto->add($produto_data);
$produto->listar('1');
$produto->deletar(60);
*/