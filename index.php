<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr">

<head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/footer.css"> 
        <title>| RacletteForEver |</title>
            </head>
        <body>
            <?php include_once 'templates/header.php' ?>
                <div class="title">
                    <h2>Bienvenue sur notre site !</h2>
                </div>
</head>
<body>
            <main class="flex">
    <br>
        </main>
    <div class="slideshow-container">

    <div class="mySlides fade">
            <img src="img/raclette3.jpg" style="width:100%">
        <div class="text">Raclette likes ;)</div>
    </div>

<div class="mySlides fade">
    <img src="img/raclette_site.jpg" style="width:100%">
<div class="text">Mmmhh</div>
</div>

<div class="mySlides fade">
    <img src="img/raclette_2.jpg" style="width:100%">
<div class="text">Damn so tasty</div>
</div>
</div>
        <br>
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
    </div>
    <center>Profiter de notre fromage de qualité traité et fait main par
        notre plus cher artisant formager de votre contrer pommée !</center>
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for (i = 0; i < slides.length; i++) {
slides[i].style.display = "none";  
}
slideIndex++;
if (slideIndex > slides.length) {slideIndex = 1}    
for (i = 0; i < dots.length; i++) {
dots[i].className = dots[i].className.replace(" active", "");
}
slides[slideIndex-1].style.display = "block";  
dots[slideIndex-1].className += " active";
setTimeout(showSlides, 3000); // Change image every 2 seconds
}
</script>
</body>
    <?php include_once 'templates/footer.php' ?>
</html>