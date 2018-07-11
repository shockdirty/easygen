<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
require_once PATH_URL.'template/header.php';

?>
<main class="main_container">
	<?php  include 'template/page_header.php'; ?>
	<div id="app_view">
		<div class="container-fluid">
			<?php 
			if($produto->list() == null){
				echo 
				'<div class="container pt-4">
				<h3 class="title1 text-center">Você ainda não tem produtos cadastrado!</h3>
				</div>';
			}else{?>
				<table class="table">
					<thead>
						<tr>
							<th scope="col"># Indentificação</th>
							<th scope="col">Categoria</th>
							<th scope="col">Nome do Produto</th>
							<th scope="col">Preço Uni.</th>
							<th scope="col">Estoque min</th>
							<th scope="col">Estoque Atual</th>
							<th scope="col">Data de Cadastro</th>
							<th scope="col" class="text-center">Ações</th>
						</tr>
					</thead>
					<?php foreach($produto->list() as $key){ ?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $key['prod_id']?></th>
								<td><?php echo $key['cat_nome']?></td>
								<td><?php echo $key['prod_nome']?></td>
								<td><?php echo $key['prod_valor_liq']?></td>
								<td><?php echo $key['prod_estq_min']?></td>
								<td><?php echo $key['prod_qtd_estq']?></td>
								<td><?php echo $key['prod_data_reg']?></td>
								<td>
									<div class="act_content">
										<a id="e_prod" href="alterar_prod.php?id=<?php echo $key['prod_id']?>" data-id="<?php echo $key['prod_id']?>" class="act_icon"><i class="fa fa-pencil"></i>Edit</a>
										<a href="#" data-id="<?php echo $key['prod_id']?>" class="d_prod act_icon"><i class="fa fa-trash"></i> Del</a>
									</div>
								</td>
							</tr>
						</tbody>
						<?php }; ?>
					</table>
					<?php }?>
				</div>
			</div>
		</main>

		<?php require_once PATH_URL.'template/footer.php'; ?>