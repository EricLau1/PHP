<h2>testando transações</h2>

<form method="POST" action="/transactions" role="form">
    
    <div class="form-group">
		<label for="name" >Name</label>
		<input type="text" class="form-control" name="name" id="name" placeholder="Name" />
	</div> <!-- end field Name -->
    
	<div class="form-group">
		<label for="email" >Email</label>
		<input type="email" class="form-control" name="email" id="email" placeholder="Email" />
	</div> <!-- end field Email -->

	<div class="form-group">
		<label for="password" >Password</label>
		<input type="password" class="form-control" name="password" id="password" placeholder="Password" />
	</div> <!-- end field Password -->

	<button type="submit" class="btn btn-primary"> Cadastrar </button>
</form>

