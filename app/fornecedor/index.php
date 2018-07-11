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
						<a data-target="add-produto" class="nav-link target-link" href="add-fornecedor.php"><span class="act_icon"><i class="fa fa-plus"></i> Cadastrar novo</span></a>
					</li>
					<li class="nav-item active target-link">
						<a  data-target="add-categoria" class="nav-link target-link" href="#add-categoria"><span class="act_icon"><i class="fa fa-plus"></i> Saída de Material</span></a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<div id="app_view">
		<div class="container-fluid">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">#ID</th>
						<th scope="col">Nome</th>
						<th scope="col">Email</th>
						<th scope="col">Telefone</th>
						<th scope="col">Estado</th>
						<th scope="col">Cidade</th>
						<th scope="col">Data de Cadastro</th>
					</tr>
				</thead>
				<?php foreach($fornecedor->list() as $key){ ?>
					<tbody>
						<tr>
							<th scope="row"><?php echo $key['forn_id']?></th>
							<td><?php echo $key['forn_nome']?></td>
							<td><?php echo $key['forn_email']?></td>
							<td><?php echo $key['forn_telefone']?></td>
							<td><?php echo $key['forn_estado']?></td>
							<td><?php echo $key['forn_cidade']?></td>
							<td><?php echo $key['forn_data_reg']?></td>
						</tr>
					</tbody>
					<?php }; ?>
				</table>
			</div>
		</div>
	</main>

	<?php require_once PATH_URL.'template/footer.php'; ?>