<!DOCTYPE html>
<?php require PATH_URL.'template/header.php';?>
<body>
	<div class="container-login">
			<h3 class="title1">EASYBOX</h3>
			<form id="form_login" class="reg_form form_login">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Usuário</label>
							<input required name="cat_nome" type="text" class="form-control eg_input" placeholder="Digite o usuario">
							<small class="form-text text-muted">Usuario admin.</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Senha</label>
							<input required name="cat_nome" type="text" class="form-control eg_input" placeholder="Digite a Senha">
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
</body>