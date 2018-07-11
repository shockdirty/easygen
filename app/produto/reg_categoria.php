<?php

sleep(1);
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Categoria.class.php';
$data  = $_POST;

print_r($data);
$categoria->add($_POST);

echo 'Categoria cadastrada com sucesso';