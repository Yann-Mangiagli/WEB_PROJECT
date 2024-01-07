<?php
session_start();

include("./database.php"); // Assurez-vous de remplacer cela par votre fichier de connexion à la base de données
$db = new Database();

// Validation du formulaire de livre
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Valider le titre du livre
    if (empty($_POST['bookName'])) {
        $errors[] = 'Le titre du livre est obligatoire.';
    }

    // Valider la catégorie du livre
    if (empty($_POST['bookCategory'])) {
        $errors[] = 'La catégorie du livre est obligatoire.';
    }

    // Ajoutez d'autres validations au besoin...

    // Si des erreurs sont présentes
    if (count($errors) > 0) {
        // Afficher les messages d'erreur
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
    } else {
        // Préparer les données du livre
        $bookData = [
            'bookName' => $_POST['bookName'],
            'bookCategory' => $_POST['bookCategory'],
            'pageNbr' => $_POST['pageNbr'],
            'extraitBook' => $_POST['extraitBook'],
            'bookSynopsis' => $_POST['bookSynopsis'],
            'writerLastName' => $_POST['writerLastName'],
            'writerFirstName' => $_POST['writerFirstName'],
            'editorName' => $_POST['editorName'],
            'releaseDate' => $_POST['releaseDate'],
            'coverImage' => $_POST['coverImage'],
        ];

        // Ajouter le livre dans la base de données
        try {
            $db->addBook($bookData); // Assurez-vous de créer la méthode addBook dans votre classe de gestion de la base de données
        } catch (Exception $e) {
            // Gérer l'exception
            die('Erreur lors de l\'ajout du livre : ' . $e->getMessage());
        }

        header('Location: index.php'); // Rediriger vers la page d'accueil ou toute autre page après l'ajout du livre
        exit(); // Assurez-vous de terminer le script après la redirection
    }
}
?>
