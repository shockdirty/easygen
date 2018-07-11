<?php

sleep(1);
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Fornecedor.class.php';
$data  = $_POST;

$fornecedor->add($_POST);

echo 'produto cadastrado com sucesso';