<?php 

require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
require_once PATH_URL.'template/header.php';

$alter_prod = $produto->get($_GET['id']);

?>
<main class="main_container">
	<?php  include 'template/page_header.php';?>
	<div id="app_view">
		<div class="container">
			<h3 class="title1">Alterar Produto: <?php echo $alter_prod[0]['prod_nome'];?></h3>

			<form id="form_alterar_produto" class="reg_form">
				<div class="row">
					<div class="col-md-12">
						<div class="form-group">
							<label>Nome do Produto</label>
							<input required name="prod_nome" type="text" class="form-control eg_input"  placeholder="Nome do produto" value="<?php echo $alter_prod[0]['prod_nome'];?>">
							<small class="form-text text-muted">Insira o nome completo do produto.</small>
							<input type="text" hidden name="prod_id" value="<?php echo $alter_prod[0]['prod_id'];?>">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="form-group ">
							<label>Categoria</label>
							<div class="form-group">
								<select required name="prod_cat_id" class="form-control eg_form_select">
									<option value="">Selecione</option>
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
					<div class="col-md-4">
						<div class="form-group">
							<label>Valor Bruto</label>
							<input  required name="prod_valor_bruto" type="text" value="<?php   echo $alter_prod[0]['prod_valor_bruto'];?>" class="form-control eg_input" placeholder="R$ Valor Bruto ">
							<small  class="form-text text-muted">Atual</small>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<label>Valor Bruto</label>
							<input  required name="prod_valor_liq" type="text" disabled class="form-control eg_input" placeholder="R$ Valor de venda ">
							<small  class="form-text text-muted">Valor final calculado para venda</small>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="form-group ">
							<label>Descrição</label>
							<textarea name="prod_desc" type="text" class="form-control eg_input" placeholder="Descrição"><?php echo $alter_prod[0]['prod_desc'];?></textarea>
							<small class="form-text text-muted">Especificações e descrição do produto.</small>
						</div>
					</div>
				</div>
				<input id="eg_btn_form" name="sendButton" type="submit" value="Cadastrar" class="eg_btn_primary">
			</form>
		</div>
	</div>
</main>

<?php require_once PATH_URL.'template/footer.php'; ?>