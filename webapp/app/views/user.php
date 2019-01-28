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
    <div>
      <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/logout">logout</a></li>
        </ul>
      </nav>
    </div>
    <hr />
    <div>
      <h1><?= $user['name'] ?></h1>
    </div>
    <div>
      <div class="error"><?= $session->flash(); ?></div>
      <form action="/user" method="POST">
        <input type="hidden" name="currentRoute" value="user" />
        <input type="hidden" name="user" value="<?= $user['id']; ?>" />
        <div>
          <label for="comment">Faça um comentário:</label> <br />
          <textarea name="comment" id="comment" cols="30" rows="5" style="resize:none"></textarea>
        </div>
        <div>
          <input type="submit" name="submit" value="submit" />
        </div>
      </form>
    </div>
    <h3>Meus Posts</h3>
    <?php if($comments != null): ?>
      <div>
        <?php foreach($comments as $c): ?>
          <p><?= $c['comment']; ?></p>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
    <script src="assets/js/script.js"></script>
  </body>
</html>