//função que irá enviar o que for pequisado para o busca.php
// atraves do metodo post
// e retornar o resultado da pesquisa
// Autor Orginal do Código: https://www.youtube.com/watch?v=IdyTXcTAa68
$(function(){
	//Pesquisar os cursos sem refresh na página
	$("#pesquisa").keyup(function(){ // função é acionada quando algo é digitado no campo do input com id=pesquisa

		var pesquisa = $(this).val(); // recebe o valor do que foi digitado no campo

		//Verificar se há algo digitado
		if(pesquisa != ''){
			var dados = {
				palavra : pesquisa
			}
			$.post('busca.php', dados, function(retorna){
				//Mostra dentro da table os resultado obtidos
				$(".resultado").html(retorna); // A table com a class=resultado recebe os valores do que for enviado pro busca.php
			});
		}else{
			$(".resultado").html(''); // caso não encontre nada, retorna vazio
		}
	});
});
