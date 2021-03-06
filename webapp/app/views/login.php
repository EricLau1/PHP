<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body>
    <div>
      <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/cadastro">cadastro</a></li>
        </ul>
      </nav>
    </div>
    <div>
        <h2>Entre com sua conta</h2>
        <div class="error"><?= $session->flash(); ?></div>
        <form action="/login" method="POST">
            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" id="name" placeholder="Informe seu nome" />
            </div>
            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password" id="password" placeholder="Informe a senha" />
            </div>
            <div>
                <input type="submit" name="submit" value="submit" />
            </div>
        </form>
    </div>
    
</body>
</html>