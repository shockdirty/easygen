<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/easygen/config/config.php';
require_once PATH_URL.'tests/data.php';
require_once PATH_URL.'lib/class/Categoria.class.php';
require_once PATH_URL.'lib/class/Fornecedor.class.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>testar</title>
</head>
<body>

	<label>Fornecedor</label>

	<select name="fornecedores" class="select1">
		<option>Selecione</option>
		<?php foreach($fornecedor->list() as $keys){ ?>
			<option value="<?php echo $keys['forn_id']; ?>"><?php echo $keys['forn_nome']; ?></option>
			<?php }?>
		</select>

		<label>Categoria</label>
		<select name="categorias" class="select1">
			<option>Selecione</option>
			<?php foreach($categoria->list() as $keys){ ?>
				<option value="<?php echo $keys['cat_id']; ?>"><?php echo $keys['cat_nome']; ?></option>
				<?php }?>
			</select>
			<select name="prod"><select>
				<label>Quantidade</label>
				<input name="estq_qnt_item" type="text"><br>
			</body>
			</html>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

			<script type="text/javascript">
				$('select[name=categorias]').change(function(){

					var data = $(this).serialize();
					console.log(data);
					$.ajax({
						method: 'POST',
						url:'data.php',
						data: data,
						success: function(resp){
							$('select[name=prod').html(resp);
						}
					});
				});
			</script>
