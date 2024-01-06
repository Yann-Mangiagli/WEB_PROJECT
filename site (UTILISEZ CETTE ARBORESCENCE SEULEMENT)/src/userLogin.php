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
                <li class="nav-item"><a href="../HTML/Index.php">Accueil</a></li>
                <li class="nav-item-two"><a href="">Livres</a></li>
                <li class="nav-logo"><a href="userBooks.php"><img src="./resources/img/logoRR.png" alt="Readers Realm logo"></a></li>
                <li class="nav-item-two"><a href="">Contact</a></li>
                <li class="nav-item"><a href="login.php">Connexion</a></li>
            </ul>
        </nav>
        <div class="mainContainer">
            <div class="form-content">
                <div class="login-png">    
                    <img src="./resources/img/login.png" alt="">
                </div>
                <form action="userLoginCheck.php" method="POST">
                    <h1 class="form-title">Connexion</h1> 
                    <div class="label-content">
                        <label><b>Nom d'utilisateur</b></label>
                        <br>
                        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username">
                    </div>
                    <br>
                    <div class="label-content">
                        <label><b>Mot de passe</b></label>
                        <br>
                        <input type="password" placeholder="Entrer le mot de passe" name="password">
                        <br>
                    </div>
                    <div class="label-content">
                        <input type="submit" id='submit' value='LOGIN' >
                    </div>
                </form>
                <a href="UserRegistration.php"><h4 class="inscription">S'inscrire</h4></a>
            </div> 
        </div> 
    <footer>
        <img src="../src/resources/img/books.png" alt="books" class="item-1">
        <p class="item-2">readersrealm@gmail.com <br> Théo Ghaemmagami | Yann Mangiagli | Leonar Sadriu | Harun Findik</p> 
        <img src="../src/resources/img/books.png" alt="books" class="item-1">
    </footer>
</body>
</html>
