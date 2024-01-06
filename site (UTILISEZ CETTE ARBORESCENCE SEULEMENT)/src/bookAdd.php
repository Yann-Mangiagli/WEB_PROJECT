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
    <link rel="stylesheet" href="./css/styleLeo.css">
</head>
    <body>
        <main>
            <nav class="navbar">
                <ul>
                    <li class="nav-item"><a href="index.php">Accueil</a></li>
                    <li class="nav-item-two"><a href="">Livres</a></li>
                    <li class="nav-logo"><a href=""><img src="./resources/img/logoRR.png" alt="Readers Realm logo"></a></li>
                    <li class="nav-item-two"><a href="userDetails.php">Contact</a></li>
                    <li class="nav-item"><a href="userLogin.php">Connexion</a></li>
                </ul>
            </nav>
                <!--(contenu unique à cette page) -->
                <br><br>
                    <h1 id="bookTitle">Quel livre<br>
                    souhaitez-vous ajouter ?
                    </h1>
                <br><br><br>
            <div class="flexboxContainerAddBook">
                <form action="traitement.php" method="post" class="myForm">
                    <div class="flexbox" id="flexbox-item-1">    
                            <label for="txtBookName">TITRE DU LIVRE<br></label>
                            <input type="text" id="bookName" name="bookName"><br><br>
                            <label for="bookCategory">CATEGORIE<br></label>
                            <select id="bookCategory">
                                <?php 
                                $htmlCategories = "";
                                foreach($categories as $category)
                                {
                                    $htmlCategories .= "<option value=" . $category["category_id"] . ">" . $category["catCategory"] . "</option>";
                                }
                                echo $htmlCategories;
                                ?>
                            </select><br><br>
                            <label for="quantity">NOMBRE DE PAGE<br></label>
                            <input type="number" id="pageNbr" name="pageNbr" min="1" max="9999">
                            <br><br>
                            <label for="extrait">EXTRAIT<br></label>
                            <input type="text" id="extraitBook" name="extraitBook" value="LIEN PDF">
                        </div>
                        <div class="flexbox" id="flexbox-item-2">
                            <label for="bookSynopsis">SYNOPSIS<br></label>
                            <textarea id="bookSynopsis" name="bookSynopsis" rows="8" cols="50"></textarea>
                        </div>
                        <div class="flexbox" id="flexbox-item-1">
                            <label for="txtWriterFullName">NOM ET PRENOM DE L'AUTEUR<br></label>
                            <input type="text" id="writerLastName" name="writerLastName" value="Nom">
                            <input type="text" id="writerFirstName" name="writerFirstName" value="Prénom">
                            <br><br>
                            <label for="editorName">NOM DE L'EDITEUR<br></label>
                            <input type="text" id="editorName" name="editorName">
                            <br><br>
                            <label for="releaseDate">ANNEE D'EDITION<br></label>
                            <input type="date" id="releaseDate" name="releaseDate" min="1" max="9999">
                            <br><br>
                            <label for="extrait">COUVERTURE DU LIVRE<br></label>
                            <input type="text" id="extraitBook" name="extraitBook" value="FICHIER PNG/JPEG/JPG">
                        </div>
                        <div class="subButton">
                            <input type="submit" value="Envoyer">
                        </div>
                    </div>
                </form>
            </div>
                <!--(contenu unique à cette page) -->
            </main>
            <footer>
                <img src="../src/resources/img/books.png" alt="books" class="item-1">
                <p class="item-2">readersrealm@gmail.com <br> Théo Ghaemmagami | Yann Mangiagli | Leonar Sadriu | Harun Findik</p> 
                <img src="../src/resources/img/books.png" alt="books" class="item-1">
            </footer>
    </body>
</html>