<!DOCTYPE html>
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
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/less/less.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
</head>
<body>

	<div class="container-login">
		<h3 class="title1">EASYBOX</h3>
		<form id="" class="reg_form form_login" method="POST" action="valida.php">
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Usuário</label>
						<input required name="usr_login" type="text" class="form-control eg_input" placeholder="Digite o usuario">
						<small class="form-text text-muted">Usuario admin.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<label>Senha</label>
						<input required name="usr_pwd" type="password" class="form-control eg_input" placeholder="Digite a Senha">
						<small class="form-text text-muted">Senha admin.</small>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<input id="eg_btn_form" name="sendButton" type="submit" value="Entrar" class="eg_btn_primary btn-block">
				</div>
			</div>
		</form>
	</div> 
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/jquery-3.2.1.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/tether.min.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/bootstrap/js/popper.min.js	"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/main.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/quasar.js"></script>
	<script src="http://<?php echo $_SERVER['SERVER_NAME'];?>/easygen/assets/js/func.js"></script>
</body>