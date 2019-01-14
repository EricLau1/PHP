<h2>Cadastro de Usuário</h2>

<?=get("mensagem");?>

<form method="POST" action="/pages/forms/cadastro.php" role="form">
	<div class="form-group">
		<label for="nome" >Nome</label>
		<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" />
	</div> <!-- end field Nome-->
	<div class="form-group">
		<label for="sobrenome" >Sobrenome</label>
		<input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Sobrenome" />
	</div> <!-- end field Sobrenome-->
	<div class="form-group">
		<label for="email" >Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email" />
	</div> <!-- end field Email-->
	<div class="form-group">
		<label for="senha" >Senha</label>
		<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" />
	</div> <!-- end field Senha-->
	<button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div> <!-- end container -->