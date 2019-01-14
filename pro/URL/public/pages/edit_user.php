<?php

$usuario =	find('usuarios', 'id', $_GET['id']);

if(!$usuario) {
	die("Infelizmente ocorreu um erro. A página não pode ser executada.");
}

?>
<h2>Editar Usuário</h2>

<?=get("mensagem");?>

<form method="POST" action="/pages/forms/update_user.php" role="form">

	<input type="hidden" name="id" value="<?=$usuario->id; ?>">

	<div class="form-group">
		<label for="nome" >Nome</label>
		<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" value="<?=$usuario->nome; ?>" />
	</div> <!-- end field Nome-->
	<div class="form-group">
		<label for="sobrenome" >Sobrenome</label>
		<input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" value="<?=$usuario->sobrenome ?>" />
	</div> <!-- end field Sobrenome-->
	<div class="form-group">
		<label for="email" >Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?=$usuario->email; ?>" />
	</div> <!-- end field Email-->

	<button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div> <!-- end container -->