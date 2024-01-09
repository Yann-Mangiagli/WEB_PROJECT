<?php
session_start();

include("./database.php");
$db = new Database();

// Validation du formulaire d'inscription
if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])) {
    $errors = [];

    // Valider le nom d'utilisateur (login)
    if (!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
        $errors[] = 'Le nom d\'utilisateur n\'est pas valide. Utilisez uniquement des lettres, des chiffres et des underscores (_).';
    }

    // Valider le mot de passe
    if (!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[A-Za-z\d]{8,}$/', $_POST['password'])) {
        $errors[] = 'Le mot de passe n\'est pas valide. Il doit contenir au moins 8 caractères, dont au moins une lettre et un chiffre.';
    }

    // Si des erreurs sont présentes
    if (count($errors) > 0) {
        // Afficher les messages d'erreur
        foreach ($errors as $error) {
            echo '<p>' . $error . '</p>';
        }
    } else {

        // Préparer les données de l'utilisateur
        $userData = [
            'useUsername' => $_POST['username'],
            'usePassword' => $_POST['password'],
        ];

        // Ajouter l'utilisateur dans la base de données
        try {
            $db->addUser($userData);
        } catch (Exception $e) {
            // Gérer l'exception
            die('Erreur lors de l\'ajout de l\'utilisateur : ' . $e->getMessage());
        }
        header('Location: index.php');
        exit(); // Assurez-vous de terminer le script après la redirection
    }
}