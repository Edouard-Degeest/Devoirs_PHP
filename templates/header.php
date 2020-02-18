<?php session_start() ?>

<header>
     <nav>
        <ul class="main-list flex">
            <li class="flex"><a href="/">Accueil</a></li>
            <li class="flex"><a href="info.php">Informations</a></li>
            <li class="flex"><a href="#">Nous contacter</a></li>
            <?php if (!isset($_SESSION['name']) && !isset($_SESSION['mot-de-passe'])): ?>
                <li class="flex"><a href="login.php">Se connecter</a></li>
            <?php else: ?>
                <li class="account">
                    <span><?= $_SESSION['name'] ?></span>
                    <ul class="none">
                        <li><a href="profil.php">Profil</a></li>
                <li class="flex"><a href="login.php">Se connecter</a></li>
                <li><a href="controllers/logout.php">Déconnexion</a></li>
        </ul>
        <?php endif ?>
        </ul>
    </nav>
    </header>