<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Database.class.php';


class Tests Extends Database
{
	public $data_select;
	public  function get_prod_categoria($data){
	

		$sql = $this->db->query("SELECT  prod_nome, prod_id,  cat_nome FROM eg_produtos INNER JOIN  eg_categorias_produto ON (cat_id = prod_cat_id) WHERE cat_id= '$data'");
		$rows = $sql->fetchAll();
		print_r($rows);
		$this->data_select = $rows;	

		function make_select($rows){
			foreach($rows as $keys)
			{
				echo '<option value="'.$keys['prod_id'].'">'.$keys['prod_nome'].'</option>';
			}
		}
		make_select($rows);
	}
}


$test = new Tests();
$caraio =  implode($_POST);

$test->get_prod_categoria($caraio);


/*$result = [];
foreach($test->getSelect() as $keys)
{
	echo '<option value="'.$keys['prod_id'].'">'.$keys['prod_nome'].'</option>';
}
*/