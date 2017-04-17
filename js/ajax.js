//Envia email tabela de valores com ajax

jQuery(document).ready(function (){

	//Primeiro form
	$("#enviaform").click(function(){

		var dados = {
			'action': 'envia_email',
			'dados' : $('#formcontato').serialize()
		};


		$.post(ajax_object.ajax_url, dados, function(resposta) {

			console.log(resposta.mensagem);
			//alert(resposta.mensagem);
			$('#row1 .btn-form').html(resposta.mensagem);
			//$('#row1 .btn-form').removeAttr( "id" );

		}, 'json');

		return false;

	});

	//Form fixo
	$("#enviaform2").click(function(){

		var dados = {

			'action': 'envia_email',
			'dados' : $('#formcontato2').serialize()

		};

		$.post(ajax_object.ajax_url, dados, function(resposta) {

			console.log(resposta.mensagem);
			//alert(resposta.mensagem);
			$('#contato .btn-form').html(resposta.mensagem);

		}, 'json');

		return false;
	});

});

