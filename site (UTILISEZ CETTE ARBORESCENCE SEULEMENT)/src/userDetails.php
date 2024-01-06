<?php
session_start();

include("./database.php");
$db = new Database();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./CSS/styleLeo.css">
</head>
    <body>
        <nav class="navbar">
            <ul>
                <li class="nav-item"><a href="">Accueil</a></li>
                <li class="nav-item-two"><a href="">Livres</a></li>
                <li class="nav-logo"><a href="userBooks.php"><img src="./resources/img/logoRR.png" alt="Readers Realm logo"></a></li>
                <li class="nav-item-two"><a href="">Contact</a></li>
                <li class="nav-item"><a href="">Connexion</a></li>
            </ul>
        </nav>
        <div class="mainContainer">
            <div class="user-info-section">
                <h2 class="username">Nom de l'utilisateur : <span class="highlight">XXThe03KDL</span></h2>
                <br>
                <p class="user-stats">Nombre d'ouvrages proposés : <span class="highlight">2</span></p>
            </div>
        </div>  
    </div>
    <footer>
        <img src="../src/resources/img/books.png" alt="books" class="item-1">
        <p class="item-2">readersrealm@gmail.com <br> Théo Ghaemmagami | Yann Mangiagli | Leonar Sadriu | Harun Findik</p> 
        <img src="../src/resources/img/books.png" alt="books" class="item-1">
    </footer>
</body>
</html>