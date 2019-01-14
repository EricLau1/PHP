<h2>Contato</h2>

<?=get("mensagem");?>

<form action="pages/forms/contato.php" method="POST">
        <div class="form-group" >
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome"/>
        </div> <!-- end form-group nome -->

        <div class="form-group" >
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu email" />
        </div> <!-- end form-group email -->

        <div class="form-group" >
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" name="assunto" id="assunto" placeholder="Digite o assunto" />
        </div> <!-- end form-group assunto -->

        <div class="form-group" >
                <label for="mensagem">Mensagem</label>
                <textarea type="text" class="form-control" name="mensagem" id="mensagem"></textarea>
        </div> <!-- end form-group mensagem -->

        <button type="submit" class="btn btn-primary block"> Submit </button>
</form>
