<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/header.css">
    <title>| Informations |</title>
</head>
<body>
<?php include_once 'templates/header.php' ?>
<main class="flex">
<?php if (isset($_SESSION['name'])) : ?>
                <div class="title">
                    <h1>Bonjour <?= $_SESSION['name'] ?> !</h1>
                </div>
                <div>
                    <img src="img/raclette-info.jpeg" class="raclette" alt="">
                </div>
                <?php if ($_SESSION['text'] == 'on') : ?>
    
                <?php endif ?>
                <div>
                        <p>Notre concepte consite a faire découvir des artisants de votre région et de partager du bon fromage avec eux tout en se faisant des amis autour  d'une bonne raclette d'hiver !
                        
                        </p>
                    </div>
                <?php if ($_SESSION['text'] == 'on') : ?>
                <?php endif ?>
            <?php else : ?>
            <?php endif ?>
</main>
</body>
</html>