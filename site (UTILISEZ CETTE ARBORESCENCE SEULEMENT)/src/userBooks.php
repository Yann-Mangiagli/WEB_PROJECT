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
        <main>
            <nav class="navbar">
                <ul>
                    <li class="nav-item"><a href="index.php">Accueil</a></li>
                    <li class="nav-item-two"><a href="">Livres</a></li>
                    <li class="nav-logo"><a href="userBooks.php"><img src="./resources/img/logoRR.png" alt="Readers Realm logo"></a></li>
                    <li class="nav-item-two"><a href="">Contact</a></li>
                    <li class="nav-item"><a href="">Connexion</a></li>
                </ul>
            </nav>
                <h2 class="book-section-title">Voici les derniers livres que vous avez ajoutés</h2>
                <hr>
                <div class="book-section">
                    <!-- Répétition de la structure pour chaque livre (contenu unique à cette page) -->
                    <div class="book">
                        <img src="./resources/img/couverture-livre1.png" alt="Titre du livre">
                        <div class="book-title">Titre du livre</div>
                        <div class="book-actions">
                            <button class="book-action">Modifier</button>
                            <button class="book-action">Supprimer</button>
                        </div>
                    </div>
                    <div class="book">
                        <img src="./resources/img/couverture-livre2.png" alt="Titre du livre">
                        <div class="book-title">Titre du livre</div>
                        <div class="book-actions">
                            <button class="book-action">Modifier</button>
                            <button class="book-action">Supprimer</button>
                        </div>
                    </div>
                    <div class="book">
                        <img src="./resources/img/couverture-livre3.png" alt="Titre du livre">
                        <div class="book-title">Titre du livre</div>
                        <div class="book-actions">
                            <button class="book-action">Modifier</button>
                            <button class="book-action">Supprimer</button>
                        </div>
                    </div>
                    <div class="book">
                        <img src="./resources/img/couverture-livre4.png" alt="Titre du livre">
                        <div class="book-title">Titre du livre</div>
                        <div class="book-actions">
                            <button class="book-action">Modifier</button>
                            <button class="book-action">Supprimer</button>
                        </div>
                    </div>
                    <div class="book">
                        <img src="./resources/img/couverture-livre5.png" alt="Titre du livre">
                        <div class="book-title">Titre du livre</div>
                        <div class="book-actions">
                            <button class="book-action">Modifier</button>
                            <button class="book-action">Supprimer</button>
                        </div>
                    </div>
                    <!-- Fin de la structure pour un livre -->
                    </div>
                </div>  
            </main>
        <footer>
            <img src="../src/resources/img/books.png" alt="books" class="item-1">
            <p class="item-2">readersrealm@gmail.com <br> Théo Ghaemmagami | Yann Mangiagli | Leonar Sadriu | Harun Findik</p> 
            <img src="../src/resources/img/books.png" alt="books" class="item-1">
        </footer>
    </body>
</html>