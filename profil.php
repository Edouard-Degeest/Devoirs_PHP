<?php session_start()?>  
    <!DOCTYPE html> 
    <html lang="fr">  
        <head>  
            <meta charset="UTF-8">     
            <link rel="stylesheet" href="./css/style.css">       
            <link rel="stylesheet" href="./css/header.css">
            <link rel="stylesheet" href="./css/profil.css">    
            <title>| Profil |</title> 
        </head> 
        <body> 
        <?php include_once 'templates/header.php' ?>
        <?php include_once 'template/footer.php' ?>
        <main class="flex">
            <h1>Préférences</h1>
            <form action="info.php" method="POST">
                <label for="img">Affichez l'image</label>
                <input type="checkbox" name="img" checked>
                <span class="slider"></span>
                <br>
                <label for="text">Affichez le texte</label>
                <input type="checkbox" name="text" checked>
                <br>
                <input  type="submit" value="Ok">
            </form>
        </main>
    </body>
</html>