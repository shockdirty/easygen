<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Fornecedor.class.php';
require PATH_URL.'template/header.php';
?>

<main class="main_container">
	<header class="main_header">
		<nav class="navbar navbar-expand-lg main_navgation">
			<a class="navbar-brand" href="#"><h3 class="header_title">Fornecedor</h3></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="nav navbar-nav">
					<li class="nav-item active">
						<a data-target="add-produto" class="nav-link target-link" href="add-fornecedor.php"><span class="act_icon"><i class="fa fa-plus"></i>Cadastrar novo</span></a>
					</li>
					<li class="nav-item active target-link">
						<a  data-target="add-categoria" class="nav-link target-link" href="#add-categoria"><span class="act_icon"><i class="fa fa-plus"></i> Relatórios</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div id="app_view">
		<div class="container-fluid">
			<form id="add_fornecedor" class="reg_form">
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label>Nome do Fornecedor</label>
							<input name="forn_nome"  type="text" class="form-control eg_input" placeholder="Nome do fornecedor">
							<small class="form-text text-muted">Insira o nome completo do Fornecedor.</small>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Email</label>
							<input name="forn_email"  type="text" class="form-control eg_input" placeholder="Email">
							<small class="form-text text-muted">Insira o email do fornecedor.</small>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group ">
							<label>Estado</label>
							<div class="form-group">
								<select  name="forn_estado" class="form-control eg_form_select">
									<option value="AC">Acre</option>
									<option value="AL">Alagoas</option>
									<option value="AP">Amapá</option>
									<option value="AM">Amazonas</option>
									<option value="BA">Bahia</option>
									<option value="CE">Ceará</option>
									<option value="DF">Distrito Federal</option>
									<option value="ES">Espírito Santo</option>
									<option value="GO">Goiás</option>
									<option value="MA">Maranhão</option>
									<option value="MT">Mato Grosso</option>
									<option value="MS">Mato Grosso do Sul</option>
									<option value="MG">Minas Gerais</option>
									<option value="PA">Pará</option>
									<option value="PB">Paraíba</option>
									<option value="PR">Paraná</option>
									<option value="PE">Pernambuco</option>
									<option value="PI">Piauí</option>
									<option value="RJ">Rio de Janeiro</option>
									<option value="RN">Rio Grande do Norte</option>
									<option value="RS">Rio Grande do Sul</option>
									<option value="RO">Rondônia</option>
									<option value="RR">Roraima</option>
									<option value="SC">Santa Catarina</option>
									<option value="SP">São Paulo</option>
									<option value="SE">Sergipe</option>
									<option value="TO">Tocantins</option>
								</select>
							</div>
							<small class="form-text text-muted">Estado</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Cidade</label>
							<input  name="forn_cidade" value="45" type="text" class="form-control eg_input" placeholder="Min">
							<small  class="form-text text-muted">Cidade</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Telefone</label>
							<input  name="forn_telefone" value="45" type="text" class="form-control eg_input" placeholder="Min">
							<small  class="form-text text-muted">Cidade</small>
						</div>
					</div>
				</div>
				<div class="row">
					<input id="eg_btn_form" name="sendButton" onclick="send(this.form)" type="button" value="Cadastrar" class="eg_btn_primary">
				</div>
			</form>
		</div>
	</div>
</main>

<?php require_once PATH_URL.'template/footer.php'; ?>