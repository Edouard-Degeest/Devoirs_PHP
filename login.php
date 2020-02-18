<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
    <title>| Connexion |</title>
</head>
<body>
<?php include_once 'templates/header.php' ?>
    <div class="login-page">
      <div class="form">
        <h2>Connexion :</h2>
          <form class="register-form"></form>
          <form action="./controllers/connexion.php" method="post">
            <input name="name" value="Jon">
            <input type="password" name="mot-de-passe">
              <button>login</button>
                </form>
      </div>
      </div>
</body>
</html>

