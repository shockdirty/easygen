<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'lib/class/Produto.class.php';
require_once PATH_URL.'lib/class/Fornecedor.class.php';
require_once PATH_URL.'template/header.php';
?>

<main class="main_container">
	<?php  include 'template/page_header.php';?>
	<div id="app_view">
		<div class="row">
			<div class="col-md-6">
				<h3 class="title1">Relatórios</h3>
			</div>
		</div>
		<div class="container-fluid">
			<?php 
			if(empty($produto->relatorio())){
				
				echo 
				'<div class="container pt-4">
				<h3 class="title1 text-center">Você ainda não relatório para exibir!</h3>
				</div>';
			}else{?>
				<table class="table">
					<thead>
						<tr>
							<th scope="col"># Indentificação</th>
							<th scope="col">Nome do Produto</th>
							<th scope="col">Nome</th>
							<th scope="col">Qtd entrada/saida</th>
							<th scope="col">Status</th>
							<th scope="col">Data de Cadastro</th>
						</tr>
					</thead>
					<?php foreach($produto->relatorio() as $key){ ?>
						<tbody>
							<tr>
								<th scope="row"><?php echo $key['log_id']?></th>
								<td><?php echo $key['prod_nome']?></td>
								<td><?php echo $key['usr_nome']?></td>
								<td><?php echo $key['log_qtd_item']?></td>
								<td><?php echo $key['log_status']?></td>
								<td><?php echo $key['reg_date_log']?></td>
							</tr>
						</tbody>
						<?php }; ?>
					</table>
					<?php }?>
				</div>
			</div>
		</main>

		<?php require_once PATH_URL.'template/footer.php'; ?>