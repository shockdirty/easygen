<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Categoria.class.php';
require_once PATH_URL.'template/header.php';
?>
<main class="main_container">
	<?php  include 'template/page_header.php'; ?>
	<div id="app_view">
		<div class="container">
			<h3 class="title1">Adicionar nova Categoria</h3>
			<form id="form_add_categoria" class="reg_form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Nome da Categoria</label>
							<input required name="cat_nome" type="text" class="form-control eg_input" placeholder="Categoria">
							<small class="form-text text-muted">Insira da categoria.</small>
						</div>
					</div>
				</div>
				<div class="row">
					
				</div>
				<input id="eg_btn_form" name="sendButton" type="submit" value="Cadastrar" class="eg_btn_primary">
			</form>
		</div> 
	</div>
</main>

<?php require_once PATH_URL.'template/footer.php'; ?>