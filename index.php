<!DOCTYPE html>
<html>
<?php //defined('BASEPATH') OR exit('No direct script access allowed');
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta name="robots" content="index, follow">
	<meta name="language" content="pt-br">
	<meta name="description" content="Currículo Online de Vitor Santos, veja seus projetos e informações.">
	<meta charset="utf-8">
	<meta name="theme-color" content="#242424">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>VSANTOS</title>
	<link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/css/normalize.css">
	<link rel="stylesheet" type="text/less" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/less" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/less/main.less">
	<link rel="stylesheet" type="text/less" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/less/config.less">
	<link rel="stylesheet" type="text/less" href="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/css/normalize.css">
	<link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>
	<?php include_once 'template/navbar.php'; ?>

	<main class="main_container">
		<header class="main_header">
			<nav class="navbar navbar-expand-lg main_navgation">
				<a class="navbar-brand" href="#"><h3 class="header_title">Olá <?php  echo $_SESSION['login']?></h3></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
				</div>
			</nav>
		</header>
		<div id="app_view">
		</div>
	</main>
	<!-- <div class="quasar_modal">
		<div class="quasar_modal_content">
			<div class="quasar_modal_header">
				<h3>Adicionar Produto</h3>
				<a class="quasar_modal_close" href="#"><i class="fa fa-close"></i></a>
			</div>
			<div class="quasar_modal_body">
				
			</div>
			<div class="quasar_modal_footer">
				<input id="eg_btn_form" type="button" value="Cadastrar" class="eg_btn_primary">
			</div>
		</div>
	</div> -->
	
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/less/less.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/jquery-3.2.1.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/tether.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/popper.min.js	"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/main.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/quasar.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/func.js"></script>
</body>
</html>