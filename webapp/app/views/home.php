<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div style="width: 800px;margin: 0 auto;">
      <div>
        <nav>
          <ul>
              <li><a href="/cadastro">Cadastro</a></li>
              <li><a href="/login">Login</a></li>
          </ul>
        </nav>
      </div>
      <hr />
      <h1>Todos os comentários</h1>
      <div>
        <form action="/user" method="POST">
          <input type="hidden" name="currentRoute" value="home" />
          <div>
            <label for="comment">Faça um comentário:</label> <br />
            <textarea name="comment" id="comment" cols="30" rows="5" style="resize:none"></textarea>
          </div>
          <div>
            <input type="submit" name="submit" value="submit" />
          </div>
        </form>
      </div>
      <?php foreach($feedbacks as $f): ?>
        <p style="border-bottom: 1px solid silver;">
          <strong><?= $f['name'] ?> escreveu:</strong> <br />
          <?= $f['comment'] ?>
        </p>
      <?php endforeach; ?>
    </div>
    <script src="assets/js/script.js"></script>
  </body>
</html>