$(function(){

	$('select[name=estq_categoria]').change(function(){

		var data = $(this).serialize();
		console.log(data);
		$.ajax({
			method: 'GET',
			url: 'reg_entrada.php',
			data: data,
			success: function(resp){
				$('select[name=estq_produto').html(resp);
			}
		});
	});

	$('#form_add_produto').submit(function(e){

		var data = $('#form_add_produto').serialize();
		var url = 'reg_prod.php';

		$.ajax({
			method: 'POST',
			url: url,
			data: data,
			success: function(resp){
				$('#form_add_produto').find('input').not("#submit_btn").val('');
				$('#form_add_produto').find('textarea').val('');
				alert(resp);
			}
		});
		e.preventDefault();
	});
	$('#form_alterar_produto').submit(function(e){

		var data = $('#form_alterar_produto').serialize();
		console.log(data);
		var url = 'reg_prod.php';

		$.ajax({
			method: 'GET',
			url: url+'?update=',
			data: data,
			success: function(resp){
				$('#form_add_produto').find('input').not("#submit_btn").val('');
				$('#form_add_produto').find('textarea').val('');
				alert(resp);
			}
		});
		e.preventDefault();
	});
	$('.d_prod').click(function(e){

		var data = $(this).attr('data-id');
		console.log(data);
		var url = 'reg_prod.php';
		var action = confirm('Deseja excluir este item?');
		if(action){
			$.ajax({
				method: 'GET',
				url: url+'?del='+data,
				data: data,
				success: function(resp){
					$('#form_add_produto').find('input').not("#submit_btn").val('');
					$('#form_add_produto').find('textarea').val('');
					window.location.reload();
				}
			});
		}
		
		e.preventDefault();
	});

	$('#form_add_categoria').submit(function(e){
		
		var data = $('#form_add_categoria').serialize();
		var url = 'reg_categoria.php';

		$.ajax({
			method: 'POST',
			url: url,
			data: data,
			success: function(resp){
				alert('Operação realizada!')
				$('#submit_btn').val('Processando...');
				$('#submit_btn').attr('disabled', true);
				$('#form_add_produto').find('input').not("#submit_btn").val('');
				$('#form_add_produto').find('textarea').val('');
				window.location.reload();
			}
		});
		e.preventDefault();
	});

	$('#form_add_estoque').submit(function(e){
		var data = $('#form_add_estoque').serialize();
		console.log(data);
		var url = 'reg_entrada.php';

		$.ajax({
			method: 'POST',
			url: url,
			data: data,
			success: function(resp){
				alert('Operação realizada!')
				$('#submit_btn').val('Processando...');
				$('#submit_btn').attr('disabled', true);
				$('#form_add_produto').find('input').not("#submit_btn").val('');
				$('#form_add_produto').find('textarea').val('');
				window.location.reload();
			}
		});
		e.preventDefault();
	});
	$('#form_rm_estoque').submit(function(e){
		var data = $('#form_rm_estoque').serialize();
		console.log(data);
		var url = 'reg_saida.php';

		$.ajax({
			method: 'POST',
			url: url,
			data: data,
			success: function(resp){
				alert('Operação realizada!')
				$('#submit_btn').val('Processando...');
				$('#submit_btn').attr('disabled', true);
				$('#form_add_produto').find('input').not("#submit_btn").val('');
				$('#form_add_produto').find('textarea').val('');
				window.location.reload();
			}
		});
		e.preventDefault();
	});
});