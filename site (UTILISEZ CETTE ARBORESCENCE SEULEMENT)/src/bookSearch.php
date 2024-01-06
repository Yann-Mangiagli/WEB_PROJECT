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
        <title>Recherche de livre</title>
        <link rel="stylesheet" href="./CSS/styleLeo.css">
    </head>
    <body>
        <main>
            <nav class="navbar">
                <ul>
                    <li class="nav-item"><a href="">Accueil</a></li>
                    <li class="nav-item-two"><a href="">Livres</a></li>
                    <li class="nav-logo"><a href="userBooks.php"><img src="./resources/img/logoRR.png" alt="Readers Realm logo"></a></li>
                    <li class="nav-item-two"><a href="">Contact</a></li>
                    <li class="nav-item"><a href="">Connexion</a></li>
                </ul>
            </nav>
                <div class="searchArea">
                    <h2>Quel livre recherchez-vous ?</h2>
                    <hr class="horizontalLine">
                    <form class="searchBar">
                        <input type="text" class="search" id="search" name="search" placeholder="Rechercher...">
                        <button class="searchButton">
                            <img src="../MEDIA/Search.png" class="searchIcon">
                        </button>
                    </form>
                </div> 
                <div class="categories">
                    <a href="#"><img src="../src/resources/img/horrorCategory.png" alt=""></a>
                    <a href="#"><img src="../src/resources/img/horrorCategory.png" alt=""></a>
                    <a href="#"><img src="../src/resources/img/horrorCategory.png" alt=""></a>
                    <a href="#"><img src="../src/resources/img/horrorCategory.png" alt=""></a>
                    <a href="#"><img src="../src/resources/img/horrorCategory.png" alt=""></a>
                </div>
            </main>
        <footer>
            <img src="../src/resources/img/books.png" alt="books" class="item-1">
            <p class="item-2">readersrealm@gmail.com <br> Théo Ghaemmagami | Yann Mangiagli | Leonar Sadriu | Harun Findik</p> 
            <img src="../src/resources/img/books.png" alt="books" class="item-1">
        </footer>
    </body>
</html>