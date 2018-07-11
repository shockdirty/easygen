<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';

//$data = implode($_GET);

$data = $_POST;

//$produto->insere_estoque($data, $select_q);
$select_id = $_GET['estq_categoria'];

$produto->get_categoria_select($select_id);
$produto->insere_estoque($data);

print_r($data);
