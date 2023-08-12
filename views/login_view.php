<!DOCTYPE html>
<html lang="en">
<head>


    <title><?= ucfirst($page) ?> - Connexion Projet PHP</title>
    <link rel="stylesheet" href="assets/styles/login.css">

<style>
  .error{
    color: red;
  }
</style>

</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <form action="" method="post">
        <h3>Connexion</h3>

        <label for="email">email</label>
        <input type="email" placeholder="Email" name="email">

        <label for="password">Mot de passe</label>
        <input type="password" placeholder="Mot de passe" name="password">

        <button type="submit" name="login">Connexion</button>
        <div class="social">
          <div class="go">
            <a href="register">S'inscrire</a>
          </div>
        </div>
    </form>
</body>
</html>

