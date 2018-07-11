/*
 * Modo de Usar:
 * require_once './Produto_model.php';
 * use Extends para aderir os metodos do modelo Produto_model
 */

 class FormRequest{
 	send(data)
 	{	
 		var form_data= data;

 		form_data = $(data).serialize();


 		var form_type = $(data).attr('id');
 		var xhttp = new XMLHttpRequest();
 		if (form_type == 'add_produto') {

 			var url = 'reg_prod.php';
 		}
 		if (form_type == 'add_categoria') {

 			var url = 'reg_categoria.php';
 		}
 		if (form_type == 'add_estoque') {

 			var url = 'reg_estoque.php';
 		}
 		if (form_type == 'add_fornecedor') {

 			var url = 'reg_fornecedor.php';
 		}
 		if (form_type == 'login_form') {

 			var url = 'login.php';
 		}

 		xhttp.onreadystatechange = function()
 		{
 			if(this.readyState == 4 && this.status == 200)
 			{	
 				eg_btn_form.value = 'Cadastrar';
 				//$('.eg_modal_body').html(this.responseText);
 				eg_btn_form.removeAttribute('disabled');
 				alert( this.responseText);
 				$(data).each(function(){
 					var val = $(this).find('input').not("#eg_btn_form").val('');
 				});

 			}else{
 				return false;
 			}
 		}
 		xhttp.open("POST", url, true);
 		xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 		xhttp.send(form_data);
 	}
 	del(data)
 	{	
 		var form_type = $(data).attr('id');
 		var itm_id = $(data).attr('data-id');

 		var form_data = form_type+'|'+itm_id;

 		var xhttp = new XMLHttpRequest();
 		if (form_type == 'add_produto' || form_type == 'd_prod' || form_type == 'e_prod') {

 			var url = 'reg_prod.php';
 		}
 		if (form_type == 'add_categoria') {

 			var url = 'reg_categoria.php';
 		}
 		if (form_type == 'add_estoque') {

 			var url = 'reg_estoque.php';
 		}
 		if (form_type == 'add_fornecedor') {

 			var url = 'reg_fornecedor.php';
 		}
 		xhttp.onreadystatechange = function (){
 			if(this.readyState == 4 && this.status == 200)
 			{
 				alert( this.responseText);
 				window.location.reload();
 			}
 		}
 		var test = confirm("Deseja excluir este item?");
 		if(test == true)
 		{
 			xhttp.open("GET", url+'?del='+itm_id, true);
 			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 			xhttp.send(form_data);
 		}
 	}
 	update(data)
 	{	
 		var form_type = $(data).attr('id');
 		var itm_id = $(data).attr('data-id');
 		console.log(itm_id);
 		var form_data = $(data).serialize();

 		console.log(form_data);

 		var xhttp = new XMLHttpRequest();
 		if (form_type == 'add_produto' || form_type == 'd_prod' || form_type == 'e_prod' || form_type == 'u_prod') {

 			var url = 'reg_prod.php';
 		}
 		if (form_type == 'add_categoria') {

 			var url = 'reg_categoria.php';
 		}
 		if (form_type == 'add_estoque') {

 			var url = 'reg_estoque.php';
 		}
 		if (form_type == 'add_fornecedor') {

 			var url = 'reg_fornecedor.php';
 		}
 		xhttp.onreadystatechange = function (){
 			if(this.readyState == 4 && this.status == 200)
 			{
 				alert( this.responseText);
 				window.location.reload();
 			}
 		}
 			xhttp.open("GET", url+'?update=&'+ form_data, true);
 			xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
 			xhttp.send(form_data);
 	}

 }

 var formQ = new FormRequest();
