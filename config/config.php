<?php

define('PATH_URL', $_SERVER['DOCUMENT_ROOT'].'/easygen/');
define('BASEPATH',$_SERVER['SERVER_NAME']);
session_start();
/*function __autoload($file_name){


		return require_once PATH_URL.'lib/class/'.$file_name.'.php';
}*/


function __autoload($file_name)
{
	strtolower($file_name);
	$file_type =  substr($file_name, -5);

	if($file_type == 'class')
	{
		$class  = substr($file_type, -5);
		return require_once PATH_URL.'lib/class/'.$file_name.'.php';

	}elseif ($file_type = 'model') {

		$class  = substr($file_type, -5);
		return require_once PATH_URL.'lib/model/'.$file_name.'.php';

	}
	
}

if(!isset($_SESSION['login']) and (!isset($_SESSION['passwd'])))
{
	unset($_SESSION['login']);
    unset($_SESSION['passwd']);
	header('location:login');
}