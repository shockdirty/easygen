<?php

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/model/User_model.php';

print_r($user->valida_acesso($_POST['usr_login'], $_POST['usr_pwd']));


