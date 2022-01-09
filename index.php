<!doctype html>
<html lang="en">
  <head>
    <title>Gestion sessions / cookies</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="w-50 mx-auto mt-3">
        <!-- On vérifie si notre variable globale COOKIE existe bien et si le cookie contenant l'utilisateur courant aussi -->
        <?php if (!isset($_COOKIE) || !isset($_COOKIE['CURRENT_USER'])) : ?>
          <!-- Si ce n'est pas le cas, alors on affiche le formulaire de connexion -->
          <form method="post" action="login.php">
            <div class="form-group">
              <label for="login">Identifiant</label>
              <input type="email" class="form-control" name="login" id="login" placeholder="Identifiant">
            </div>
            <div class="form-group">
              <label for="password">Mot de passe</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
          </form>
        <?php else: ?>
          <!-- Si c'est le cas, on affiche l'utilisateur actuellement connecté -->
            <div class="alert alert-primary" role="alert">
              <strong>Connecté en tant que <?php echo $_COOKIE['CURRENT_USER']; ?></strong>
              <a href="logout.php"> Se déconnecter </a>
            </div>
        <?php endif; ?>
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>