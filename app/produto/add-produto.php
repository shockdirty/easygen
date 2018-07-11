<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
require_once PATH_URL.'template/header.php';
?>
<main class="main_container">
	<?php  include 'template/page_header.php'; ?>
	<div id="app_view">
		<div class="container">
			<h3 class="title1">Cadastrar novo produto</h3>

			<form id="form_add_produto" class="reg_form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Nome do Produto</label>
							<input required name="prod_nome" type="text" class="form-control eg_input" placeholder="Nome do produto">
							<small class="form-text text-muted">Insira o nome completo do produto.</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						<div class="form-group ">
							<label>Categoria</label>
							<div class="form-group">
								<select required name="prod_cat_id" class="form-control eg_form_select">
									<option value=""></option>
									<?php 
									foreach($produto->categoria->get() as $key){
										echo "<option value=".$key['cat_id'].">".$key['cat_nome']."</option>";
									}
									?>
								</select>
							</div>
							<small class="form-text text-muted">Selecione a categoria.</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Estoque Mínimo</label>
							<input  required name="prod_estq_min" type="text" class="form-control eg_input" placeholder="Estoque Mínimo ">
							<small  class="form-text text-muted">Atual</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Valor Bruto</label>
							<input  required name="prod_valor_bruto" type="text" class="form-control eg_input" placeholder="R$ Valor Bruto ">
							<small  class="form-text text-muted">Atual</small>
						</div>
					</div>
					<div class="col-md-3">
						<div class="form-group">
							<label>Valor de Venda</label>
							<input  required name="prod_valor_liq" type="text" disabled class="form-control eg_input" placeholder="R$ Valor de venda ">
							<small  class="form-text text-muted">Valor final calculado para venda</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group ">
							<label>Descrição</label>
							<textarea name="prod_desc" type="text" class="form-control eg_input" placeholder="Descrição"></textarea>
							<small class="form-text text-muted">Especificações e descrição do produto.</small>
						</div>
					</div>
				</div>
				<input id="submit_btn" name="sendButton" type="submit" value="Cadastrar" class="eg_btn_primary">
			</form>
		</div>
	</div>
</main>

<?php require_once PATH_URL.'template/footer.php'; ?>