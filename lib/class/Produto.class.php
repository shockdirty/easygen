<?php
/**
 * Modelo de classe Produto
 *
 * @category    Database
 * @author  Vitor Santos
 * @link    https://vsantosweb.com
 */

/**
 * Modo de Usar:
 * require_once './Produto_model.php';
 * use Extends para aderir os metodos do modelo Produto_model
 */
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
__autoload('Database.class');


class Produto extends Produto_model
{
	public $data = [];
	public $info = [];

	public function __construct()
	{

		/* Crie uma nova instância do Modelo Produto no __construct para carregar os métodos do modelo. */
		$this->info['title'] = 'Produtos';
		$this->info['description'] = 'Lista de produtos';
		$this->produto = new Produto_model();
		$this->categoria = new Categoria_model();
	}

	public function page($arg)
	{
		$data_page = $arg;
		if(!isset($arg))
		{
			return false;
		}
		else{
			if($arg === $data_page){

				print ($this->info[$data_page]);
			}
		}
	}

	public function add($data)
	{
		/* O método  insert() recebe um array $data como parâmetro
		*  contento chave = nome da coluna e valor =  valor da coluna.
		*/
		$this->produto->insert($data);
	}

	public function update($id)
	{	
		/* O método  update() recebe um array $data como parâmetro
		*  contento chave = nome da coluna e valor =  valor da coluna.
		*/
		$this->produto->update($id);
	}

	public function delete($id)
	{
		/* O método  delete() recebe uma variável $id como parâmetro
		*  contento o id chave da coluna que será menipulada.
		*/
		$this->produto->delete($id);
	}

	public function list()
	{
		/* O método  getAll() retorna um array contento o resultado da query de um SELECT
		*/
		return $this->produto->get_all();
	}
	public function get($prod_id)
	{
		return $this->produto->get($prod_id);
	}
	public function insere_estoque($data)
	{
		$this->produto->set_estoque($data);
	}
	public function retira_estoque($data)
	{
		$this->produto->unset_estoque($data);	
		
	}
	public function get_categoria_select($data)
	{
		$this->produto->get_prod_categoria($data);
	}
	public function relatorio($filter = null)
	{
		return $this->produto->get_prod_relat($filter);
	}
}

$produto = new Produto();

