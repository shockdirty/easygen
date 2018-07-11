<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
require_once PATH_URL.'lib/class/Fornecedor.class.php';
//__autoload('Produto.class');
require_once PATH_URL.'template/header.php';
?>

<main class="main_container">
	<?php  include 'template/page_header.php'; ?>
	<div id="app_view">
		<div class="container">
			<h3 class="title1">Entrada de material</h3>

			<form id="form_add_estoque" class="reg_form">
				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label>Data da entrada</label>
							<input name="estq_data_reg" value="Sansumg Galaxy" type="date" class="form-control eg_input" placeholder="Data">
							<small class="form-text text-muted">Insira a data oficial do cadastro deste produto.</small>
						</div>
					</div>
					<div class="col-md-9">
						<div class="form-group ">
							<label>Fornecedor</label>
							<div class="form-group">
								<select  name="estq_fornecedor" class="form-control eg_form_select">
									<option>Selecione</option>
									<?php foreach($fornecedor->list() as $keys){ ?>
										<option value="<?php echo $keys['forn_id']; ?>"><?php echo $keys['forn_nome']; ?></option>
										<?php }?>
									</select>
								</div>
								<small class="form-text text-muted">Selecione a categoria.</small>
							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group ">
								<label>Categoria</label>
								<div class="form-group">
									<select  name="estq_categoria" class="form-control eg_form_select">
										<option>Selecione</option>
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
						<div class="col-md-5">
							<div class="form-group ">
								<label>Produto</label>
								<div class="form-group">
									<select  name="estq_produto" class="form-control eg_form_select">
										<option>Selecione</option>
									</select>
								</div>
								<small class="form-text text-muted">Selecione a categoria.</small>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group ">
								<label>Quantidade </label>
								<div class="form-group">
									<input name="prod_qtd_estq" type="text" class="form-control eg_input" placeholder="Quantidade">
									<small class="form-text text-muted">Quantidade de novos items.</small>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Observação</label>
								<textarea name="estq_obs" value="Sansumg Galaxy" type="text" class="form-control eg_input" placeholder="Observação"></textarea>
								<small class="form-text text-muted">Observações.</small>
							</div>
						</div>
					</div>
					<input id="submit_btn" name="sendButton" type="submit" value="Cadastrar" class="eg_btn_primary">
				</form>
			</div>
		</div>
	</main>

	<?php require_once PATH_URL.'template/footer.php'; ?>