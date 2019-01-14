<h2>editar user</h2>

<form method="POST" action="/user_update" role="form">
    
    <input type="hidden" name="id" value="<?=$userEncontrado->id;?>">

    <div class="form-group">
		<label for="name" >Name</label>
		<input type="text" class="form-control" name="name" id="name" value="<?=$userEncontrado->name;?>" />
	</div> <!-- end field Name -->
    
	<div class="form-group">
		<label for="email" >Email</label>
		<input type="email" class="form-control" name="email" id="email" value="<?=$userEncontrado->email;?>" />
	</div> <!-- end field Email -->

	<div class="form-group">
		<label for="password" >Password</label>
		<input type="password" class="form-control" name="password" id="password" value="<?=$userEncontrado->password;?>" />
	</div> <!-- end field Password -->

	<button type="submit" class="btn btn-primary"> Atualizar </button>
    <a href="/" class='btn btn-link'>voltar</a>
</form>

