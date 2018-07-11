<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
unset($_SESSION['login']);
unset($_SESSION['passwd']);


session_destroy();
header('location:.');